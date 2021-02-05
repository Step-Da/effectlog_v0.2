// $("#testButton").click(function(){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         url:'/dd',
//         method:'POST',
//         data: {
//             "_token": "{{ csrf_token() }}",
//         }
//     }).done(function(data){
//         console.log(data);
//         alert(data);
//     });
// });


// $("#testButton").click(function(){
// $.ajax({
//     type:'GET',
//     url: "/dd",
//     headers: {
//         'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
//     },
//     date:{
//         pp:'fff',
//     }
//     }).done(function(data){
//         console.log(data);
//         document.getElementById('testTable').innerHTML += data;
//     });
// });