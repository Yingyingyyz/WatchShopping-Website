const searchBar = document.getElementById('searchBar');

function searchFunction(){

    var input, filter, ul, h2, a, i;
    input = document.getElementById('searchBar');
    console.log(input)
    filter = input.nodeValue.toUpperCase();
    ul = document.getElementById('col-4');
    li = document.getElementsByTagName('h2');

    for(i=0 ; i< h2.length; i++){
        a = h2[i].getElementsByTagName('a')[0];
        if(a.innerHTML.toUpperCase().indexOf(filter) > -1){
            li[i].style.display = "";
        }

        else{
            li[i].style.display = "none";
        }
    }
}
function search(){
    var keyword = $('#keyword').val();
    console.log(keyword)
    $.ajax({
        type: "GET",
        url: "search.php",
        data: {'keyword':keyword},
        success: function(data){

            const watches = $( "#list");
            watches.html("");
            console.log(data);
            var Productlist = JSON.parse(data);

            for(var i in Productlist){
                console.log(Productlist[i].detail_url)
                var interHtml = '<div class="col-4" ><a href = ' + Productlist[i].detail_url + '><img src= ' + Productlist[i].img_url + '>';
                interHtml += '<a/><h4>'+ Productlist[i].name+'</h4>';
                interHtml += '<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>';
                interHtml += '<p>' + Productlist[i].price + '</p>';
                // div.id=Productlist[i].id;
                // div.interHtml=interHtml;
                watches.append(interHtml)
            }
        },
        error: function(request){
            console.log(request);

        },

    });
}

function filterQuery(){
    var fbjS = document.getElementById("fid");
    var fid = fbjS.options[fbjS.selectedIndex].value;
    $.ajax({
        type: "GET",
        url: "filter.php",
        data: {'fid':fid},
        success: function(data){
            const watches = $( "#list");
            watches.html("");
            //console.log(data);
            var Productlist = JSON.parse(data);

            for(var i in Productlist){

                var interHtml = '<div class="col-4"> <a href = ' + Productlist[i].detail_url + '><img src= ' + Productlist[i].img_url + '></a>';
                interHtml += '<h4>'+ Productlist[i].name+'</h4>';
                interHtml += '<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>';
                interHtml += '<p>' + Productlist[i].price + '</p>';
                // div.id=Productlist[i].id;
                // div.interHtml=interHtml;
                watches.append(interHtml)
            }
        },
        error: function(request){
            console.log(request);

        },

    });
}
function wFilterQuery(){
    var fbjS = document.getElementById("fid");
    var fid = fbjS.options[fbjS.selectedIndex].value;

    $.ajax({
        type: "GET",
        url: "women-filter.php",
        data: {'fid':fid},
        success: function(data){
            const watches = $( "#list");
            watches.html("");
            //console.log(data);
            var Productlist = JSON.parse(data);

            for(var i in Productlist){

                var interHtml = '<div class="col-4" ><a href = ' + Productlist[i].detail_url + '><img src= ' + Productlist[i].img_url + '></a>';
                interHtml += '<h4>'+ Productlist[i].name+'</h4>';
                interHtml += '<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>';
                interHtml += '<p>' + Productlist[i].price + '</p>';
                // div.id=Productlist[i].id;
                // div.interHtml=interHtml;
                watches.append(interHtml)
            }
        },
        error: function(request){
            console.log(request);

        },

    });
}

function changePrice(){

    var pbjS = document.getElementById("pid");
    var num = pbjS.options[pbjS.selectedIndex].value;
    var price = $("#ori_price").val();
    $("#price").text(price*num);

}

function sortQuery(){
    var objS = document.getElementById("oid");
    console.log(objS)
    var oid = objS.options[objS.selectedIndex].value;
    $.ajax({
        type: "GET",
        url: "sort.php",
        data: {'oid':oid},
        success: function(data){
            const watches = $( "#list");
            watches.html("");
            //console.log(data);
            var Productlist = JSON.parse(data);

            for(var i in Productlist){

                var interHtml = '<div class="col-4"> <a href = ' + Productlist[i].detail_url + '><img src= ' + Productlist[i].img_url + '></a>';
                interHtml += '<h4>'+ Productlist[i].name+'</h4>';
                interHtml += '<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>';
                interHtml += '<p>' + Productlist[i].price + '</p>';
                // div.id=Productlist[i].id;
                // div.interHtml=interHtml;
                watches.append(interHtml)
            }
        },
        error: function(request){
            console.log(request);

        },

    });
}

function wSortQuery(){
    var objS = document.getElementById("oid");
    console.log(objS)
    var oid = objS.options[objS.selectedIndex].value;
    $.ajax({
        type: "GET",
        url: "women-sort.php",
        data: {'oid':oid},
        success: function(data){
            const watches = $( "#list");
            watches.html("");
            //console.log(data);
            var Productlist = JSON.parse(data);

            for(var i in Productlist){

                var interHtml = '<div class="col-4" <a href = ' + Productlist[i].detail_url + '><img src= ' + Productlist[i].img_url + '></a>';
                interHtml += '<h4>'+ Productlist[i].name+'</h4>';
                interHtml += '<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>';
                interHtml += '<p>' + Productlist[i].price + '</p>';
                // div.id=Productlist[i].id;
                // div.interHtml=interHtml;
                watches.append(interHtml)
            }
        },
        error: function(request){
            console.log(request);

        },

    });
}

window.onload = function() {
    const watches = document.getElementById( "watches");
    const Productlist = [
        {id: ' mensWristWatch  ',name: ' men Wrist Watch ', href: 'Mens Wrist Watch.html ',price: ' 240', rate: 5, ImageSrc: 'man1.jpg '},
        {id: ' mensWristWatch  ',name: ' men Wrist Watch ', href: 'Mens Wrist Watch.html ',price: ' 280', rate: 5, ImageSrc:'3.jpg'},
        {id: ' womansWristWatch  ',name: ' Woman Wrist Watch ', href: 'Woman Wrist Watch.html ',price: ' 275', rate: 5, ImageSrc: 'woman3.jpg'},
        {id: ' womansWristWatch  ',name: ' Woman Wrist Watch ', href: 'Woman Wrist Watch.html ',price: ' 230', rate: 4, ImageSrc: 'woman1.jpg'},
        {id: ' ZenSmartWatch  ',name: ' Zen smart Watch ', href: 'Men Watch.html ',price: '220', rate: 5, ImageSrc: 'FTW4019_6.jfif' },
        {id: ' womansWristWatch  ',name: ' Woman Wrist Watch ', href: 'Woman Wrist Watch.html ',price: ' 180', rate: 4, ImageSrc: 'woman0.jpg' },
        {id: ' womansWristWatch  ',name: ' Woman Wrist Watch ', href: 'Woman Wrist Watch.html ',price: ' 140', rate: 4, ImageSrc: 'woman3.jpg' },
        {id: ' womansWristWatch  ',name: ' Woman Wrist Watch ', href: 'Woman Wrist Watch.html ',price: ' 190', rate: 4, ImageSrc: 'woman2.jpg' },
        {id: ' womansWristWatch  ',name: ' Woman Wrist Watch ', href: 'Woman Wrist Watch.html ',price: ' 240', rate: 4, ImageSrc: 'woman4.jpg' },
        {id: ' womansWristWatch  ',name: ' Woman Wrist Watch ', href: 'Woman Wrist Watch.html ',price: ' 195', rate: 4, ImageSrc: 'woman5.jpg' },
        {id: ' womansWristWatch  ',name: ' Woman Wrist Watch ', href: 'Woman Wrist Watch.html ',price: ' 160', rate: 4, ImageSrc: 'woman6.jpg' },
        {id: ' womansWristWatch  ',name: ' Woman Wrist Watch ', href: 'Woman Wrist Watch.html ',price: ' 145', rate: 4, ImageSrc: 'offer.wbp' } ,
        {id: ' MansWristWatch  ',name: ' Man Wrist Watch ', href: 'Man Wrist Watch.html ',price: ' 260', rate: 5, ImageSrc: 'man2.jpg' },
        {id: ' MansWristWatch  ',name: ' Man Wrist Watch ', href: 'Man Wrist Watch.html ',price: ' 170', rate: 4, ImageSrc: 'man3.jpg' },
        {id: ' MansWristWatch  ',name: ' Man Wrist Watch ', href: 'Man Wrist Watch.html ',price: ' 180', rate: 4, ImageSrc: 'man1.jpg' },
        {id: ' MansWristWatch  ',name: ' Man Wrist Watch ', href: 'Man Wrist Watch.html ',price: ' 140', rate: 4, ImageSrc: 'man5.jpg' },
        {id: ' MansWristWatch  ',name: ' Man Wrist Watch ', href: 'Man Wrist Watch.html ',price: ' 300', rate: 4, ImageSrc: 'man6.jpg' },
        {id: ' MansWristWatch  ',name: ' Man Wrist Watch ', href: 'Man Wrist Watch.html ',price: ' 260', rate: 5, ImageSrc: 'man7.jpg' },
        {id: ' MansWristWatch  ',name: ' Man Wrist Watch ', href: 'Man Wrist Watch.html ',price: ' 320', rate: 5, ImageSrc: '3.jpg' },
    ]
    // appendChildHtml(Productlist, watches)

}
function sortRate(sortParam) {
    const watches = document.getElementById( "watches");  
 Productlist.sort(function(a,b) {
  if (sortParam=='lowToHigh'){
      return(a.rate> b.rate);
  }else{
      return(a.rate >b.rate);
  }
  
})
appendChildHtml(Productlist,watches)  
}

function appendChildHtml(Productlist,watches){
    for(let i = 0,l = Productlist.length;i <1;i++){
        var interHtml = '<a href = ' + Productlist[i].href + '><img class = "image' + i +' " src + ' + Productlist[i].imageSrc + ' width = "160';
        interHtml += '<div class = "name">' + Productlist[i] .name+ '</div>';
        interHtml += '<div class + "price">' + Productlist[i].price + '</div>';
        div.id=Productlist[i].id;
        div.interHtml=interHtml;
        watches.appendChildHtml(div);
    }
}
