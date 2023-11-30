</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <footer>
        <div class="footer-bg">
            <div class="footer-wrapper">                
                <div class="left-footer-column">
                    <div class="left-footer-content">
                        <img src="assets/logotypes/desktopLogo.svg" alt="logo" class="footer-logo" />
                        <p class="footer-p"><?= create_copyright()?></p>                        
                    </div>
                    <div class="social-media-wrapper">
                        <a href="#"><img src="assets/socialMedia/Facebook.svg" alt="facebook" class="social-media-icon" /></a>
                        <a href="#"><img src="assets/socialMedia/Instagram.svg" alt="instagram" class="social-media-icon" /></a>
                        <a href="#"><img src="assets/socialMedia/twitterx.svg" alt="twitter" class="social-media-icon" /></a>                           
                    </div>
                </div>
                <div class="right-footer-column get-mid">
                    <p class="footer-p"><a href="#">Om oss</p></a>
                    <p class="footer-p"><a href="#">Kontakt</p></a>
                    <p class="footer-p"><a href="#">Cookies & integritets-policy</p></a>
                </div>
                <div class="center-footer-column">
                    <p class="footer-p">Missa inte din chans till 20% rabatt!</p>
                    <div id="regBtnFt" class="regBtnFt regBtnTFt footer-button">
                        <span id="regTextFt">REGISTRERA</span>
                        <input type="text" name="regEmailFt" id="regEmailFt" class="regEmailFt">
                        <button id="okBtnFt" class="okBtnFt">OK</button>
                    </div>
                </div>
                <script type="text/javascript" src="regBtn.js"></script>
                <div class="right-footer-column get-top">
                    <p class="footer-p"><a href="#">Om oss</p></a>
                    <p class="footer-p"><a href="#">Kontakt</p></a>
                    <p class="footer-p"><a href="#">Cookies & integritets-policy</p></a>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </footer>    
</html>