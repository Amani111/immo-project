
// $("#flipbook").turn({
//     width: 1108,
//     height: 552,
//     autoCenter: true,
//     gradients:true
// });

// $("#pageFld").val($("#flipbook").turn("page"));

// $("#flipbook").bind("turned", function(event, page, view) {
//     $("#pageFld").val(page);
// });

// $("#pageFld").change(function() {
//     $("#flipbook").turn("page", $(this).val());
// });

// $("#prevBtn").click(function() {
//     $("#flipbook").turn("previous");
// });

// $("#nextBtn").click(function() {
//     $("#flipbook").turn("next");
// });

var currentPage = 0;

$('.book')
.on('click', '.active', nextPage)
.on('click', '.flipped', prevPage);

$('.book').on("swipeleft", nextPage);
$('.book').on("swiperight", prevPage);

function prevPage() {
  $('.flipped')
    .last()
    .removeClass('flipped')
    .addClass('active')
    .siblings('.page')
    .removeClass('active');
}
function nextPage() {
  $('.active')
    .removeClass('active')
    .addClass('flipped')
    .next('.page')
    .addClass('active')
    .siblings();
}
