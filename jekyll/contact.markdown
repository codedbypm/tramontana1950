---
layout: base
---

<section class="section section_contact">

    <div class="container">
        <div class="row justify-content-between mb-5">

            <div class="col-sm-12 col-md-6 col-lg-5 order-2 order-sm-first">

                <div id="map"></div>

            </div>

            <div class="col-sm-12 col-md-6 order-first order-sm-2">
                
                <nav class="nav nav_links">
                    <a class="nav-link animsition-link" href="menu.html">Menu</a>
                    <a class="nav-link animsition-link" href="contact.html">Contatti</a>
                </nav>

                <h1 class="section__heading mb-0">Come trovarci</h1>
                
                <!-- Info -->
                <div class="section_contact__item">
                    <h4 class="mb-0">Indirizzo</h4>
                    <p class="mb-0">{{ site.address }}</p>
                </div> 

                <div class="section_contact__item">
                    <h4 class="mb-0">Telefono</h4>
                    <p class="mb-0">
                        <a href="tel://{{ site.telephone }}">{{ site.telephone }}</a>
                    </p>
                </div> 

                <div class="section_contact__item">
                    <h4 class="mb-0">Email</h4>
                    <p class="mb-0">
                        <a href="mailto://{{ site.email }}">{{ site.email }}</a>
                    </p>
                </div> 

                <div class="section_contact__item">
                    <h4 class="mb-0">Orari di apertura</h4>
                    <p class="mb-0">Dal Lunedì alla Domenica<br> 
                    Pranzo: dalle 12:00 alle 15:00<br>
                    Cena: dalle 19:00 alle 22:00</p>
                </div> 

            </div>
        </div> 
    </div> 

</section>
