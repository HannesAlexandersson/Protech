        <footer>
            <div class="footer-wrapper">
                <div class="copyright-small">
                        <?=create_copyright()?>   
                    </div>                 
                <div class="logo-socials">
                    <div class="logo-footer">
                        <img src="assets/PT Logo.svg" />  
                    </div>
                    <div class="copyright">
                        <?=create_copyright()?>   
                    </div>                 
                    <div class="social-media">                  
                        <img src="assets/Instagram.svg" />
                        <img src="assets/Facebook.svg" />
                        <img src="assets/twitterx.svg" />
                    </div>                    
                </div>
                <div class="mail-trapper">
                    <div class="mail-trapper-text-footer">
                    <p>Registrera din e-post och få 20% rabatt.</p>
                    </div>
                    <form class="footer-form" action="index.php" method="post">
                        <input class="email-input" type="email" name="email" required="required" placeholder="E-post address"/>
                        <button class="btn-footer" type="submit">Registrera</button>
                    </form>
                </div>
                <div class="credentials">
                    <div class="column-left footer-columns">
                        <p class="heading-footer-credentials">Legal</p>                                                  
                        <p class="int">Integritets- och cookiepolicy</p>                        
                    </div>
                    <div class="column-right footer-columns">
                        <p class="heading-footer-credentials">Hjälp</p>                        
                        <p class="int">Om oss</p>                           
                        <p class="int">Kontakt</p>                         
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>