    function showCart(cart){
        $('#cart .modal-body').html(cart);
        $('#cart').modal();
    }

$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/add',
        data: {id: id},
        type: 'GET',
        success: function(res){
            if(!res) alert('Ошибка!');
            // console.log(res);
            showCart(res);
        },
        error: function() {
            alert('Error!');
        }
    });
});


$(".my-rating-9").starRating({
    initialRating: 5,
    disableAfterRate: false,
    onHover: function(currentIndex, currentRating, $el){
        $('.live-rating').text(currentIndex);
    },
    onLeave: function(currentIndex, currentRating, $el){
        $('.live-rating').text(currentRating);
    },
    starSize: 20
});
$(".my-rating-product").starRating({
    starSize: 20,
    readOnly: true,
    disableAfterRate: false
});


$(".my-rating-9").click(function () {
    $('#srating').val($('.live-rating').text());
});

$(".comment-rating").starRating({
    strokeColor: '#894A00',
    strokeWidth: 10,
    starSize: 20,
    readOnly: true

});


$(document).ready(function () {
    // setInterval(function(){ $("#refb").click(); }, 1000);
    $(".button-collapse").sideNav();
});

// ============================================================
window.addEvent('domready',function(){

    //SAMPLE 7
    var startItem = 3; //or   0   or any
    var thumbs_mask7 = $('thumbs_mask7').setStyle('left',(startItem*60-568)+'px').set('opacity',0.8);
    var fxOptions7 = {property:'left',duration:1000, transition:Fx.Transitions.Back.easeOut, wait:false}
    var thumbsFx = new Fx.Tween(thumbs_mask7,fxOptions7);
    var nS7 = new noobSlide({
        box: $('box7'),
        items: [0,1,2,3,4,5,6,7],
        handles: $$('#thumbs_handles7 span'),
        fxOptions: fxOptions7,
        onWalk: function(currentItem){
            thumbsFx.start(currentItem*60-568);
        },
        startItem: startItem
    });
    //walk to first with fx
    nS7.walk(0);


});

