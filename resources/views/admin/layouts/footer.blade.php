<!-- Footer -->
<footer class="mt-auto">
    <div class="container">
        <p class="mb-0">© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</footer>

<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 300 // Set the height of Summernote editor here
        });

        $('.page-name').on('keyup', function () {
            let currentValue = $(this).val();
            let formattedValue = currentValue
                .replace(/\s+/g, '-')
                .replace(/^-+|-+$/g, '');
            $('.page-slug').val(formattedValue);
        });

    });
</script>