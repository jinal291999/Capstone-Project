

$.ajax({
    url: "https://edamam-recipe-search.p.rapidapi.com/search?q=chicken",
    type: 'GET',
    dataType: 'json',
    headers: {
        "X-RapidAPI-Key": "90125958b9msh8ce2e716f6abe2ep18542djsn617cededb6d4",
		"X-RapidAPI-Host": "edamam-recipe-search.p.rapidapi.com"
    },
    contentType: 'application/json; charset=utf-8',
    success: function (result) {
        console.log(result);
    },
    error: function (error) {
        
    }
});