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
  '.git'
];

function shouldExclude(filePath) {
  const relativePath = path.relative(srcDir, filePath);
  
  // Normaliza las rutas y maneja correctamente el separador de directorios
  const normalizedPath = relativePath.replace(/\\/g, '/');  // Para Windows

  // Verifica si alguna ruta excluida es exactamente igual o el prefijo del path
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
  // Limpia el directorio de salida si existe
  if (fs.existsSync(outDir)) {
    fs.rmSync(outDir, { recursive: true, force: true });
  }

  // Crea el directorio de salida
  fs.mkdirSync(outDir, { recursive: true });

  // Inicia el proceso de copia
  copyRecursive(srcDir, outDir);
  console.log('Archivos copiados exitosamente a la carpeta "out"');
} catch (err) {
  console.error('Error al copiar archivos:', err);
}
