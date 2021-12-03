<template>
    <QuillEditor :options="quillConfig" />
</template>

<script>
import {defineComponent} from "vue";
import {Quill, QuillEditor} from '@vueup/vue-quill'
import MarkdownShortcuts from 'quill-markdown-shortcuts'
import BlotFormatter from 'quill-blot-formatter'
import QuillEmoji from 'quill-emoji'
import HtmlEditButton from 'quill-html-edit-button'
import { ImageDrop } from 'quill-image-drop-module'
import MagicUrl from 'quill-magic-url'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import "quill-emoji/dist/quill-emoji.css";

Quill.register("modules/MarkdownShortcuts", MarkdownShortcuts);
Quill.register("modules/BlotFormatter", BlotFormatter);
Quill.register("modules/QuillEmoji", QuillEmoji);
Quill.register("modules/HtmlEditButton", HtmlEditButton);
Quill.register("modules/ImageDrop", ImageDrop);
Quill.register("modules/MagicUrl", MagicUrl);

export default defineComponent({
    name: "MarkdownTextarea",
    components: {
        QuillEditor
    },
    data() {
        return {
            quillConfig: {
                theme: "snow",
                modules: {
                    toolbar: [[
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                    ], [
                        'blockquote',
                        'code-block',
                    ], [
                        {'list': 'ordered'},
                        {'list': 'bullet'},
                        {'align': ['', 'center', 'right']},
                    ], [
                        {'header': ['1', '2', '3', '4', '5', '6', 'normal']},
                    ], [
                        'link',
                        'video',
                        'image',
                        'emoji'
                    ]],
                    MarkdownShortcuts: {
                        name: 'markdownShortcuts',
                        module: MarkdownShortcuts
                    },
                    BlotFormatter: {
                        name: 'blotFormatter',
                        module: BlotFormatter
                    },
                    HtmlEditButton: {
                        name: "HtmlEditButton",
                        module: HtmlEditButton
                    },
                    ImageDrop: {
                        name: "ImageDrop",
                        module: ImageDrop
                    },
                    MagicUrl: {
                        name: "MagicUrl",
                        module: MagicUrl
                    },
                    "emoji-toolbar": true,
                    "emoji-shortname": true,
                }
            },

        }
    }
})
</script>
