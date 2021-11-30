<template>
    <QuillEditor :modules="modules" theme="snow" :toolbar="toolbar" />
</template>

<script>
import { defineComponent } from "vue";
import { QuillEditor } from '@vueup/vue-quill'
import MarkdownShortcuts from 'quill-markdown-shortcuts'
import '@vueup/vue-quill/dist/vue-quill.snow.css';

export default defineComponent({
    name: "MarkdownTextarea",
    components: {
        QuillEditor
    },
    data() {
        return {
            toolbar: [ [
                    'bold',
                    'italic',
                    'underline',
                    'strike',
                ], [
                    'blockquote',
                    'code-block',
                ], [
                    { 'list': 'ordered' },
                    { 'list': 'bullet' },
                    { 'align': ['', 'center', 'right'] },
                ], [
                    { 'header': ['1', '2', '3', '4', '5', '6', 'normal'] },
                ], [
                    'link',
                    'video',
                    'image'
                ]
            ]
        }
    },
    setup: () => {
        const modules = {
            name: 'markdownShortcuts',
            module: MarkdownShortcuts
        }
        return { modules }
    },

})
</script>
