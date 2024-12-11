import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'assets/ts/index.ts'),
      },
      output: {
        dir: 'dist',
        entryFileNames: 'bundle.js',
        assetFileNames: 'bundle.css',
      },
    },
    minify: true,
    sourcemap: false,
  },
  css: {
    preprocessorOptions: {
      scss: {
      }
    }
  }
});
