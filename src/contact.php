<? $current_page = 'contact' ?>
<? $page_title = 'Contact Us' ?>
<? include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'header.php' ?>

        <div class="w3-content w3-padding-large w3-padding-32 w3-large">
            <div class="w3-row w3-padding-64">
                <div class="w3-half">
                    <p>Contact <strong>Robin Taylor</strong></p>
                    <p><strong>Mobile Number:</strong>&nbsp;07836 569110<br><strong>Office Number:</strong>&nbsp;01292 315489<br><strong>Fax Number:</strong>&nbsp;01292 317276</p>
                    <p><strong>Email:</strong> <span id="robin_email">robin [at] troontug [dot] co [dot] uk</span></p>
                </div>

                <div class="w3-half">
                    <p><strong>Our Postal Address:-</strong></p>
                    <p>Troon Tug Co Ltd<br>The Harbour<br>Troon<br>Scotland<br>United Kingdom<br>KA10 6DW</p>
                </div>
            </div>

            <p>Want to see where we are on the map? <a href="/map" target="_blank">Click Here</a></p>
        </div>

        <script>
            var robin_email = document.getElementById( 'robin_email' );

            var robin_email_address = robin_email.innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );

            robin_email.innerHTML = '<a href="mailto:' + robin_email_address + '" target="_blank">' + robin_email_address + '</a>';
        </script>

<? include __DIR__ . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'footer.php' ?>
