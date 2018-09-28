window.dateVisible = function () {
    var etat = $('#archive_horses');
    if (etat.is(":checked"))
    {
        $('#dateAsk').show();
    } else
    {
        $('#dateAsk').hide();
    }
}