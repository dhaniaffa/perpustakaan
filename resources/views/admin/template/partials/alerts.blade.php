<script>
    {{--Data Berhasil Ditambahkan--}}
    @if(session('success'))
    $.notify({
        // options
        message: '{{session('success')}}'
    },{
        // settings
        placement: {
            from: "bottom",
            align: "right"
        },
        type: 'success'
    });
    @endif

    {{--Data Berhasil Diupdate--}}
    @if(session('info'))
    $.notify({
        // options
        message: '{{session('info')}}'
    },{
        // settings
        placement: {
            from: "bottom",
            align: "right"
        },
        type: 'info'
    });
        @endif
        {{--Hapus Data --}}
        @if(session('danger'))
        $.notify({
            // options
            message: '{{session('danger')}}'
        },{
            // settings
            placement: {
                from: "bottom",
                align: "right"
            },
            type: 'danger'
        });
        @endif

</script>
