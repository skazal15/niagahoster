<div class="container">
      <div class="paket-hosting text-center">
        <div>
          <h3>Paket Hosting Singapura yang Tepat</h3>
          <h4>Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
        </div>
        <div class="row paket-hosting justify-content-center">
          <div class="col-10">
            <div class="row text-center">
          @foreach($niaga as $item)
            @if($item->id == 1)
            <?php
              $discount = number_format($item->price_discount,0,"",".");
              $discount = explode('.',$discount,2);
              $SS_discount = sprintf("%d",$discount[1]);
            ?>
              
              <div class="col-lg" id="bayi">
                  <div class="nama-paket">
                    <h4><b>{{$item->name}}</b></h4>
                  </div>  
                  <div class="harga-paket">
                    <h6 class="text-muted"> <del>Rp {{$item->price}}</del></h6>
                    <h3><sup>Rp</sup><b>{{$discount[0]}}<sup>.{{$SS_discount}}/bln</sup></b></h3>
                  </div>
                  <div class="pengguna-paket">
                    <p><b>{{$item->total_user}}</b> Pengguna Terdaftar</p>
                  </div>
                  <div class="detail-paket">
                    <p><b>0.5X RESOURCE POWER</b></p>
                    <p><b>500 MB</b> Disk Space</p>
                    <p><b>Unlimited</b> Bandwith</p>
                    <p><b>Unlimited</b> Database</p>
                    <p><b>1</b> Domain</p>
                    <p><b>Instant</b> Backup</p>
                    <p><b>Unlimited SLL</b> Selamanya</p>
                  </div>
                  <div class="">
                    <a href="#" class="btn btn-lg btn-paket">Pilih Sekarang</a>
                  </div>
              </div>
            @elseif($item->id == 2)
            <?php
              $discount = number_format($item->price_discount,0,"",".");
              $discount = explode('.',$discount,2);
              $SS_discount = sprintf("%d",$discount[1]);
            ?>
              <div class="col-lg" id="pelajar">              
                  <div class="nama-paket">
                    <h4><b>{{$item->name}}</b></h4>
                  </div>  
                  <div class="harga-paket">
                    <h6 class="text-muted"> <del>Rp {{$item->price}}</del></h6>
                    <h3><sup>Rp</sup><b>{{$discount[0]}}<sup>.{{$SS_discount}}/bln</sup></b></h3>
                  </div>
                  <div class="pengguna-paket">
                    <p><b>{{$item->total_user}}</b> Pengguna Terdaftar</p>
                  </div>
                  <div class="detail-paket">
                    <p><b>1 X RESOURCE POWER</b></p>
                    <p><b>Unlimited</b> Disk Space</p>
                    <p><b>Unlimited</b> Bandwith</p>
                    <p><b>Unlimited</b> POP3 Email</p>
                    <p><b>Unlimited</b> Database</p>
                    <p><b>10</b>Addon Domain</p>
                    <p><b>Instant</b> Backup</p>
                    <p><b>Domain Gratis</b> Selamanya</p>
                    <p><b>Unlimited SLL</b> Selamanya</p>
                  </div>
                  <div class="">
                    <a href="#" class="btn btn-lg btn-paket">Pilih Sekarang</a>
                  </div>
              </div>
            @elseif($item->id == 3)
            <?php
              $discount = number_format($item->price_discount,0,"",".");
              $discount = explode('.',$discount,2);
              $SS_discount = sprintf("%d",$discount[1]);
            ?>
              <div class="col-lg hosting-package-personal " id="pesonal">
                <div class="ribbon ribbon-top-left">
                  <span>Best Seller</span>
                </div>
                  <div class="nama-paket" id="personal" style="">
                    <h4><b>{{$item->name}}</b></h4>
                  </div>  
                  <div class="harga-paket" id="personal">
                    <h6> <del>Rp {{$item->price}}</del></h6>
                    <h3><sup>Rp</sup><b>{{$discount[0]}}<sup>.{{$SS_discount}}/bln</sup></b></h3>
                  </div>
                  <div class="pengguna-paket" id="personal">
                    <p><b>{{$item->total_user}}</b> Pengguna Terdaftar</p>
                  </div>
                  <div class="detail-paket">
                    <p><b>2 X RESOURCE POWER</b></p>
                    <p><b>Unlimited</b> Disk Space</p>
                    <p><b>Unlimited</b> Bandwith</p>
                    <p><b>Unlimited</b> POP3 Email</p>
                    <p><b>Unlimited</b> Databases</p>
                    <p><b>Unlimited</b>Addon Domaisn</p>
                    <p><b>Instant</b> Backup</p>
                    <p><b>Domain Gratis</b> Selamanya</p>
                    <p><b>Unlimited SLL</b> Selamanya</p>
                    <p><b>Private</b> Name Server</p>
                    <p><b>SpamAssasin</b> Mail Protection</p>
                  </div>
                  <div class="btn-paket-box">
                    <a href="#" class="btn btn-lg btn-paket">Pilih Sekarang</a>
                  </div>
              </div>
            @elseif($item->id == 4)
            <?php
              $discount = number_format($item->price_discount,0,"",".");
              $discount = explode('.',$discount,2);
              $SS_discount = sprintf("%d",$discount[1]);
            ?>
              <div class="col-lg" id="bisnis">
                  <div class="nama-paket">
                    <h4><b>{{$item->name}}</b></h4>
                  </div>  
                  <div class="harga-paket">
                    <h6 class="text-muted"> <del>Rp {{$item->price}}</del></h6>
                    <h3><sup>Rp</sup><b>{{$discount[0]}}<sup>.{{$SS_discount}}/bln</sup></b></h3>
                  </div>
                  <div class="pengguna-paket">
                    <p><b>{{$item->total_user}}</b> Pengguna Terdaftar</p>
                  </div>
                  <div class="detail-paket">
                    <p><b>3 X RESOURCE POWER</b></p>
                    <p><b>Unlimited</b> Disk Space</p>
                    <p><b>Unlimited</b> Bandwith</p>
                    <p><b>Unlimited</b> POP3 Email</p>
                    <p><b>Unlimited</b> Databases</p>
                    <p><b>Unlimited</b>Addon Domains</p>
                    <p><b>Magic Auto</b> Backup & Restore</p>
                    <p><b>Domain Gratis</b> Selamanya</p>
                    <p><b>Unlimited SLL</b> Gratis Selamanya</p>
                    <p><b>Private</b> Name Server</p>
                    <p><b>Prioritas</b> Layanan Support</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p><b>SpamExpert</b> Pro Mail Protection</p>
                  </div>
                  <div class="">
                    <a href="#" class="btn btn-lg btn-paket">Pilih Sekarang</a>
                  </div>
                </div>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- Paket Hosting End -->