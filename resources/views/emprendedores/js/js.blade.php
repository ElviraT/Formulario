<script type="text/javascript">
	
var xhr2;
var xhr3;
var select_state, $select_state;
var select_municipality, $select_municipality;
var select_parish, $select_parish;

$select_state = $('#id_state').selectize({
    loadingClass: 'loading',
    onChange: function(value) {
      $("#estado").val($("#id_state option:selected").text());    
        if (!value.length) return;
        /*listar municipios*/
        select_municipality.disable();
        select_municipality.clearOptions();
        select_municipality.load(function(callback) {
            xhr2 && xhr2.abort();
            xhr2 = $.ajax({
                url: '{{ route('municipio_dependiente') }}?estado='+value,
                success: function(results) {
                    select_municipality.enable();
                    callback(results);
                },
                error: function() {
                    callback();
                }
            })
        });
    }
});

$select_municipality = $('#id_municipality').selectize({
                    labelField: 'nombre',
                    valueField: 'id',
                    searchField: ['nombre'],
                    loadingClass: 'loading',
                    preload: true,

                    onChange: function(value) {
                    $("#municipio").val($("#id_municipality option:selected").text());
                    if (!value.length) return;
                    /*listar parroquias*/
                    select_parish.disable();
                    select_parish.clearOptions();
                    select_parish.load(function(callback) {
                        xhr3 && xhr3.abort();
                        xhr3 = $.ajax({
                            url: '{{ route('parroquia_dependiente') }}?municipio='+value,
                            success: function(results) {
                                select_parish.enable();
                                callback(results);
                            },
                            error: function() {
                                callback();
                            }
                        })
                    });
                }
     });

$select_parish = $('#id_parish').selectize({
                    labelField: 'nombre',
                    valueField: 'id',
                    searchField: ['nombre'],
                    loadingClass: 'loading',
                });

                select_parish  = $select_parish[0].selectize;
                select_municipality = $select_municipality[0].selectize;
                select_state = $select_state[0].selectize;

                select_municipality.disable();
                select_parish.disable();

select_parish.on('change', function() {
    $("#parroquia").val($("#id_parish option:selected").text());
});
</script>