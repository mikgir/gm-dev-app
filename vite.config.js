import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy'
import laravel from 'laravel-vite-plugin';
import inject from "@rollup/plugin-inject";

export default defineConfig({
    plugins: [
        inject({   // => that should be first under plugins array
            $: 'jquery',
            jQuery: 'jquery',
        }),
        laravel({
            input: [
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/assets/images',
                    dest: 'src/',
                }
            ],
        })
    ],
});
