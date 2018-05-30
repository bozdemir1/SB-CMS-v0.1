$(document).ready(function() {
    $.ajax({
        url:"http://localhost/BurakDevecioglu/admin/production/data.php",
        method:"GET",
        success:function(data){
            console.log(data);
            var motorlar=[];
            for(var i in data){
                motorlar.push("Motor"+ data[i].etkinlikler_id);
            }
            
            var chartdata = {
               labels:motorlar,
               datasets : [
                   {
                       label : 'Motor türü',
                       backgroundColor:'rgba(200, 200, 200, 0.75)',
                       borderColor:'rgba(200, 200, 200, 0.75)',
                       hoverBackgroundColor:'rgba(200, 200, 200, 0.75)',
                       hoverBorderColor:'rgba(200, 200, 200, 1)',
                       data:motorlar
                   }
               ]
            };
            var ctx= $("#mycanvas");
            
            var barGraph = new Chart(ctx,{
                type:'bar',
                data:chartdata
            });
        },
        error:function(data){
            console.log(data);
        }
    });
    
});