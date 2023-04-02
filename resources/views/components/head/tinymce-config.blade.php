<script src="{{ asset('tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    tinymce.init({
        selector: 'textarea#editor',
        icons: 'thin',
        plugins: 'quickbars image lists code table codesample',
        toolbar: 'blocks | forecolor backcolor | bold italic underline strikethrough | link image blockquote codesample | align bullist numlist | code ',
        height: 600,
        content_style: 'body { margin: 2rem 10%; }'
    });
</script>
