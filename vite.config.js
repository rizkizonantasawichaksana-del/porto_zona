import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";
import { defineConfig } from "vite";

export default defineConfig({
  plugins: [
    laravel({
      input: ["src/css/main.css", "src/js/main.js"],
      refresh: true,
    }),
    tailwindcss(),
  ],
  server: {
    watch: {
      ignored: ["**/storage/framework/views/**"],
    },
  },
});
