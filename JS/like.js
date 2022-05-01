var liked = 'placeholder' //needs code to get it from php
var page = 'string'//whatever page your on
var likeError = false

function like(liked,page) {
    if (signedIn == true) {
        if (liked == true) {
            //code to insert page into favorites
        } else if (liked == false) {
            //code to remove page from favorites
        }
    } else if (signedIn == false) {
        likeError = true
        return canLike
    }
}