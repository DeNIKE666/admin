<script>

    @if(Session::has('denied_role'))
        $.notify({
            icon: 'fal fa-times',
            title: 'Ошибка',
            message: '{{ session()->get('denied_role') }}',
        }, {
            type: 'danger',
            placement: {
                from: "top",
                align: "right"
            },
            delay: 10000,
        });
    @endif

    @if(Session::has('successfullMessage'))
        $.notify({
            icon: 'fal fa-check',
            title: 'Действие выполнено',
            message: '{{ session()->get('successfullMessage') }}',
        }, {
            type: 'success',
            placement: {
                from: "top",
                align: "right"
            },
            delay: 10000,
        });
    @endif
</script>
