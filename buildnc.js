const fs = require('fs');
const path = require('path');

const srcDir = __dirname;
const outDir = path.join(__dirname, 'out');

const excludeList = [
  'assets/scss',
  'assets/ts',
  'node_modules',
  'out',
  'tsconfig.json',
  'vite.config.ts',
  '.gitignore',
  'package-lock.json',
  'package.json',
  '.git',
  "buildnc.js"
];

function shouldExclude(filePath) {
  const relativePath = path.relative(srcDir, filePath);
  
  const normalizedPath = relativePath.replace(/\\/g, '/');  // Para Windows

  return excludeList.some(excludeItem => {
    const normalizedExcludeItem = excludeItem.replace(/\\/g, '/');  // Normaliza el separador
    return normalizedPath === normalizedExcludeItem || normalizedPath.startsWith(normalizedExcludeItem + '/');
  });
}

function copyRecursive(src, dest) {
  if (shouldExclude(src)) {
    return;
  }

  const exists = fs.existsSync(src);
  const stats = exists && fs.statSync(src);
  const isDirectory = exists && stats.isDirectory();

  if (isDirectory) {
    if (!fs.existsSync(dest)) {
      fs.mkdirSync(dest, { recursive: true });
    }
    fs.readdirSync(src).forEach((childItemName) => {
      copyRecursive(path.join(src, childItemName), path.join(dest, childItemName));
    });
  } else {
    fs.copyFileSync(src, dest);
  }
}

try {
  if (fs.existsSync(outDir)) {
    fs.rmSync(outDir, { recursive: true, force: true });
  }

  fs.mkdirSync(outDir, { recursive: true });

  copyRecursive(srcDir, outDir);
  console.log('Archivos copiados exitosamente a la carpeta "out"');
} catch (err) {
  console.error('Error al copiar archivos:', err);
}
