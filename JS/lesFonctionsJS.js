



function AfficherRegion(idRegion)
{
    
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Home/index",
            data:"idRegion="+idRegion,
            success: function(data)
            {
                $('#divRegion').empty();
                $('#divRegion').append(data);
            },
            error:function()
            {
                
            }
        }
    );
}

function AfficherVilles(idVille)
{
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Home/AfficherLesRegions",
            data:"idVille="+idVille,
            success: function(data)
            {
                $('#divVille').empty();
                $('#divVille').append(data);
            },
            error: function()
            {

            }
        }
    );
}