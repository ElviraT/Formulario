{{--fileinput--}}
  <script src="{{ asset('/assets/js/piexif.min.js')}}"></script>
  <script src="{{ asset('/assets/js/sortable.min.js')}}"></script>
  <script src="{{ asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('/assets/js/fileinput.min.js')}}"></script>
  <script src="{{ asset('/assets/js/LANG.js')}}"></script>
  
<script type="text/javascript">
	 /*IMAGENES*/
    $("#rif").fileinput({
        languaje: 'es',
        overwriteInitial: false,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="ti-eraser"></i>',
        removeTitle: 'Cancelar o restablecer cambios',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        layoutTemplates: {main2: '{preview} {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif","jpeg"]
        });

    $("#registro_mercantil").fileinput({
        languaje: 'es',
        overwriteInitial: false,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="ti-eraser"></i>',
        removeTitle: 'Cancelar o restablecer cambios',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        layoutTemplates: {main2: '{preview} {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif","jpeg"]
        });

    $("#cedula").fileinput({
        languaje: 'es',
        overwriteInitial: false,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="ti-eraser"></i>',
        removeTitle: 'Cancelar o restablecer cambios',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        layoutTemplates: {main2: '{preview} {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif","jpeg"]
        });

    $("#certificado_emprende").fileinput({
        languaje: 'es',
        overwriteInitial: false,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="ti-eraser"></i>',
        removeTitle: 'Cancelar o restablecer cambios',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        layoutTemplates: {main2: '{preview} {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif","jpeg"]
        });

    $(function() {
        $('.otro').selectize({
            preload: true,
            loadingClass: 'loading',
            closeAfterSelect: true
            });
    });
</script>