/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/3/2019
 * Time: 10:06
 */
$('.save-domain').submit(function (event) {
    event.preventDefault();
    var domain = $('#domain-name').val();
    $.ajax({url:"nopage.php",type:'post',
        data:{domainName:domain},
        success:function (response){ alert(response); }
    });
});