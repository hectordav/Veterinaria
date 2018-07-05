<script type="text/javascript">
    $(document).ready(function() {
        $("#id_especie").change(function() {
            $("#id_especie option:selected").each(function() {
                id_especie = $('#id_especie').val();
                $.post("<?php echo base_url(); ?>animal/fill_raza", {
                    id_especie : id_especie
                }, function(data) {
                    $("#id_raza").html(data);
                    $("#id_raza").selectpicker('refresh');
                });
            });
        });
    });
</script>