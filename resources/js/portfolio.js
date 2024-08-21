$(function(){
    console.log('hello world')
    $('.container').typeChar({
            html: $(`<h2 class="text-sm md:text-xl text-center text-gray-700 group-hover:text-green-700 ease-in-out duration-400">Full stack dev based in Philippines</h2>`),
            completed: $.noop
    });   

    //change colors text
    const colors = ['text-red-600', 'text-orange-600', 'text-amber-600', 'text-yellow-600', 'text-lime-600', 'text-green-600', 'text-emerald-600', 'text-teal-600', 'text-cyan-600', 'text-sky-600', 'text-blue-600', 'text-indigo-600', 'text-violet-600', 'text-purple-600', 'text-fuchsia-600', 'text-pink-600', 'text-rose-600'];
    const colors_bg = ['bg-gradient-to-r from-red-500 to-red-900', 
                       'bg-gradient-to-r from-orange-500 to-orange-900', 
                       'bg-gradient-to-r from-amber-500 to-amber-900', 
                       'bg-gradient-to-r from-yellow-500 to-yellow-900', 
                       'bg-gradient-to-r from-lime-500 to-lime-900', 
                       'bg-gradient-to-r from-green-500 to-green-900', 
                       'bg-gradient-to-r from-emerald-500 to-emerald-900', 
                       'bg-gradient-to-r from-teal-500 to-teal-900', 
                       'bg-gradient-to-r from-cyan-500 to-cyan-900', 
                       'bg-gradient-to-r from-sky-500 to-sky-900',
                       'bg-gradient-to-r from-blue-500 to-blue-900', 
                       'bg-gradient-to-r from-indigo-500 to-indigo-900', 
                       'bg-gradient-to-r from-violet-500 to-violet-900', 
                       'bg-gradient-to-r from-purple-500 to-purple-900', 
                       'bg-gradient-to-r from-fuchsia-500 to-fuchsia-900', 
                       'bg-gradient-to-r from-pink-500 to-pink-900', 
                       'bg-gradient-to-r from-rose-500 to-rose-900'];

    let index = 0;

    setInterval(function() {
        $('.color').removeClass(colors.join(' ')).addClass(colors[index]);
        $('.bg_color').removeClass(colors_bg.join(' ')).addClass(colors_bg[index]);
        index = (index + 1) % colors.length;
        index = (index + 1) % colors_bg.length;
    }, 1000); // 1000 milliseconds = 1 seconds

    //carousel images
    $(".regular").slick({
        infinite: true,
        autoplay:true,
        arrows:true,
        slidesToShow: 1,
        accessibility:true,
        slidesToScroll: 1,
        autoplaySpeed: 1500,
        prevArrow:'<button type="button" data-role="none" class="slick-prev">Previous</button>',
        nextArrow:'<button type="button" data-role="none" class="slick-next">Next</button>',
    });

    //copying email
    $('#copyEmailButton').click(function(){
        var email = 'oconer@fellowdevs.io';
        navigator.clipboard.writeText(email).then(function() {
            $('#message').text('Email copied: ' + email);
        });
    });

})
