<div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 pd-40">
                <h3 class="text-center">Your Bidding
                    Successfuly Added</h3>
                <p class="text-center">your bid <span class="price color-popup">(4ETH) </span> has been listing to our database</p>
                <a href class="btn btn-primary"> Watch the listings</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 pd-40">
                <h3>Place a Bid</h3>
                <p class="text-center">You must bid at least <span class="price color-popup">4.89 ETH</span>
                </p>
                <input type="text" class="form-control"
                       placeholder="00.00 ETH">
                <p>Enter quantity. <span class="color-popup">5 available</span>
                </p>
                <input type="text" class="form-control quantity" value="1">
                <div class="hr"></div>
                <div class="d-flex justify-content-between">
                    <p> You must bid at least:</p>
                    <p class="text-right price color-popup"> 4.89 ETH </p>
                </div>
                <div class="d-flex justify-content-between">
                    <p> Service free:</p>
                    <p class="text-right price color-popup"> 0,89 ETH </p>
                </div>
                <div class="d-flex justify-content-between">
                    <p> Total bid amount:</p>
                    <p class="text-right price color-popup"> 4 ETH </p>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#popup_bid_success" data-dismiss="modal" aria-label="Close"> Place a bid</a>
            </div>
        </div>
    </div>
</div>
