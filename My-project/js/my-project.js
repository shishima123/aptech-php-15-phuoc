$(document).ready(function(){
    $.get("data_movie.json", function (data) {
        // start carousel list item hot_movies
        for (i = 0; i < 3; i++) {
            console.log(i)
            var obj = new _carousel_list_movie('hot_movies');
            obj.appendto_carousel_list();
        };
        // end carousel list item hot_movies
    
        // start card list item tv_series and movies
        for (i = 0; i < 8; i++) {
            console.log(i);
            if (i <= 3) {
                // console.log(i);
                var obj = new _list_item_movie_desktop('top', 'tv_series');
                obj.appendto_card_list();
                var obj = new _list_item_movie_desktop('top', 'movies');
                obj.appendto_card_list();
            } else {
                // console.log(i);
                var obj = new _list_item_movie_desktop('bottom', 'tv_series');
                obj.appendto_card_list();
                var obj = new _list_item_movie_desktop('bottom', 'movies');
                obj.appendto_card_list();
            }
            var obj = new _carousel_list_movie('tv_series');
            obj.appendto_carousel_list();
            var obj = new _carousel_list_movie('movies');
            obj.appendto_carousel_list();
        }
        // end card list item tv_series and movies
    
        function _list_item_movie_desktop(pos_card_list_movie, type_movie) {
            this.pos = pos_card_list_movie;
            this.type_movie = type_movie;
            // console.log(this.type_movie)
            if (this.type_movie === 'tv_series') {
                var new_data = data.tv_series;
            } else if (this.type_movie === 'movies') {
                var new_data = data.movies;
            }
    
            var list_movies_desktop = '<div class="card text-center d-flex justify-content-center mx-1 rounded Cards--background--color mouse-hover"><div class="card-body p-0"><a href="' + new_data[i].path + '" target="_blank"><div class="mt-3 Cards--group--img" style="background-image: url(' + new_data[i].image_src + ');"></div><h6 class="card-title text-light mt-3 mx-4">' + new_data[i].name + '</h6></a></div><div class="card-footer border-top-0 p-0 pb-xl-2"></div></div></div>';
    
            this.appendto_card_list = function () {
                // console.log(this.pos);
                $(list_movies_desktop).appendTo("#card_list_" + this.type_movie + "_desktop_" + this.pos);
                // console.log("#card_list_" + this.type_movie + "_desktop_" + this.pos);
            }
        }
    
        function _carousel_list_movie(carousel_type_movie) {
    
            this.carousel_type_movie = carousel_type_movie;
    
            if (this.carousel_type_movie === "hot_movies") {
                var new_data = data.hot_movies;
            } else if (this.carousel_type_movie === "tv_series") { var new_data = data.tv_series }
            else if (this.carousel_type_movie === "movies") { var new_data = data.movies }
    
            var number_slide = '<li id="' + this.carousel_type_movie + '-number-' + i + '" data-target="#carousel_list_' + this.carousel_type_movie + '" data-slide-to="' + i + '" class=""></li>'
            // console.log(number_slide);
            var carousel_item = '<div id="' + this.carousel_type_movie + '-carousel-item-' + i + '" class="carousel-item"><a href="' + new_data[i].path + '" target="_blank"> <img class="d-block w-100 " src="' + new_data[i].image_src + '" alt="First slide"><div class="carousel-caption Carousel--caption-bg"><h4 class="text-light">' + new_data[i].name + '</h4><p class="text-light d-none d-md-block">' + new_data[i].content + '</p></div></a></div>';
            // console.log(carousel_item);
    
            this.appendto_carousel_list = function () {
                $(carousel_item).appendTo("#carousel_inner_" + this.carousel_type_movie);
                // console.log("#carousel_inner_" + this.carousel_type_movie);
    
                $(number_slide).appendTo("#" + this.carousel_type_movie + "_number_slide");
                // console.log("#" + this.carousel_type_movie + "-number-slide")
    
                $("#" + this.carousel_type_movie + "-carousel-item-0").addClass("active");
                // console.log("#" + this.carousel_type_movie + "-carousel-item-0");
    
                $("#" + this.carousel_type_movie + "-number-0").addClass("active");
                // console.log("#" + this.carousel_type_movie + "-number-0");
            }
        }
    })
})


