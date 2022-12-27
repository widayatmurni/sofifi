<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PagesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'Beranda',
                'slug' => 'dashboard',
                'language_id' => 1,
                'page' => '  <main class="page-full-single">
                <div id="dashboard">
                  <div class="header">
            
                    <div class="instansi">
                      <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                      <div class="text">
                        <div class="kl">Kementerian Hukum dan HAM RI</div>
                        <div class="kantor">Kantor Imigrasi Kelas I TPI Ternate</div>
                        <div class="address">Jl. SKSD Kalumpang Ternate Tengah, Kota Ternate, Maluku Utara</div>
                      </div>
                    </div>
            
                    <div class="apps">
                      <img class="app-brand" src="http://dev.local:8000/assets/vectors/logoapp.png" alt="app">
                      <div class="names">
                        <div class="app-name">SOFIFI</div>
                        <div class="app-name-2">Sitem Operasi Interaktif Imigrasi</div>
                      </div>
                    </div>
            
                  </div>
            
                  <div class="contents">
                    <!-- <video class="vid-player" src="http://dev.local:8000/assets/coba.mov" autoplay /> -->
                  </div>
            
                  <div class="float-nav">
                    <div class="nav-box">
                      <div class="nav-btn nav-item" data-href="gallery">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/gallery.png" alt="gallery">
                        </div>
                        <div class="nav-text">Gallery</div>
                      </div>
                      <div class="nav-btn nav-item" data-href="news">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/news.png" alt="news">
                        </div>
                        <div class="nav-text">Berita</div>
                      </div>
                      <div class="nav-btn nav-item" data-href="definition">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/wna.png" alt="wna">
                        </div>
                        <div class="nav-text">WNA</div>
                      </div>
                      <div class="nav-btn nav-language">
                        <span class="text">ID</span>
                        <img class="flag" src="../assets/vectors/flag_id.png" alt="flag">
                      </div>
                      <div class="nav-btn nav-item" data-href="wni-menu">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/wni.png" alt="wni">
                        </div>
                        <div class="nav-text">WNI</div>
                      </div>
                      <div class="nav-btn nav-item" data-href="contact">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/contact.png" alt="contact">
                        </div>
                        <div class="nav-text">Kontak</div>
                      </div>
                      <div class="nav-btn nav-item" data-href="survei">
                        <div class="nav-icon">
                          <img class="img-icon" src="../assets/vectors/survei.png" alt="survei">
                        </div>
                        <div class="nav-text">Survei</div>
                      </div>
                    </div>
                  </div>
            
                  <div class="dialog-choose-language">
                    <div class="choose-language overlay-bg">
            
                      <div class="language-box">
                        <div class="items">
            
                          <div class="language-item" data-href="id">
                            <div class="flag">
                              <img src="../assets/vectors/flag_id.png" alt="Flag">
                            </div>
                            <div class="text">Indonesia</div>
                          </div>
            
                          <div class="language-item" data-href="en">
                            <div class="flag">
                              <img src="../assets/vectors/flag_id.png" alt="Flag">
                            </div>
                            <div class="text">Inggris</div>
                          </div>
            
                          <div class="language-item" data-href="ch">
                            <div class="flag">
                              <img src="../assets/vectors/flag_id.png" alt="Flag">
                            </div>
                            <div class="text">China</div>
                          </div>
            
                          <div class="language-item" data-href="ko">
                            <div class="flag">
                              <img src="../assets/vectors/flag_id.png" alt="Flag">
                            </div>
                            <div class="text">Korea</div>
                          </div>
            
                        </div>
                      </div>
            
                    </div>
                  </div>
                </div>
            
              </main>',
            ], [
                'title' => 'WNI MENU',
                'slug' => 'wni-menu',
                'language_id' => 1,
                'page' => '  <main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="/assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Layanan Imigrasi Bagi Warga Negara Indonesia ( WNI )</h2>
                  </div>
                </div>
                <div id="wni-menu">
                  <div class="overlay"></div>
                  <div class="menus">
            
                    <div class="menu" data-href="definition">
                      <div class="icon-box">
                        <i class="icon-definition"></i>
                      </div>
                      <div class="text">Definisi</div>
                    </div>
            
                    <div class="menu" data-href="requirement">
                      <div class="icon-box">
                        <!-- <svg width="175px" height="168px" viewBox="0 0 175 168" version="1.1" xmlns="http://www.w3.org/2000/svg" -->
                        <i class="icon-requirement"></i>
                      </div>
                      <div class="text">Persyaratan</div>
                    </div>
            
                    <div class="menu" data-href="price">
                      <div class="icon-box">
                        <!-- <svg width="178px" height="145px" viewBox="0 0 178 145" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-price"></i>
                      </div>
                      <div class="text">Tarif</div>
                    </div>
            
                    <div class="menu" data-href="flow">
                      <div class="icon-box">
                        <!-- <svg width="157px" height="156px" viewBox="0 0 157 156" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-flow"></i>
                      </div>
                      <div class="text">Alur Proses</div>
                    </div>
            
                    <div class="menu" data-href="mpaspor">
                      <div class="icon-box">
            
                        <!-- <svg width="144px" height="138px" viewBox="0 0 144 138" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-mpaspor"></i>
                      </div>
                      <div class="text">M-Paspor</div>
                    </div>
            
                  </div>
                </div>
            
                <div class="float-menu">
                  <div class="nav-single to-dashboard" data-href="dashboard">
                    <i class="icon-dashboard"></i>
                    <span class="text">Dashboard</span>
                  </div>
                </div>
              </main>',
            ], [
                'title' => 'WNA MENU',
                'slug' => 'wna-menu',
                'language_id' => 1,
                'page' => '<main class="page-full-single">
                <div class="c-header">
                  <div class="office">
                    <img class="logo" src="../assets/vectors/logoditjenim.png" alt="logo">
                  </div>
                  <div class="title">
                    <h2>Layanan Imigrasi Bagi Warga Negara Asing ( WNA )</h2>
                  </div>
                </div>
                <div id="wna-menu">
                  <div class="overlay"></div>
                  <div class="menus">
            
                    <div class="menu" data-href="wna-definition">
                      <div class="icon-box">
                        <i class="icon-definition"></i>
                      </div>
                      <div class="text">Definisi</div>
                    </div>
            
                    <div class="menu" data-href="wna-requirement">
                      <div class="icon-box">
                        <!-- <svg width="175px" height="168px" viewBox="0 0 175 168" version="1.1" xmlns="http://www.w3.org/2000/svg" -->
                        <i class="icon-requirement"></i>
                      </div>
                      <div class="text">Persyaratan</div>
                    </div>
            
                    <div class="menu" data-href="wna-price">
                      <div class="icon-box">
                        <!-- <svg width="178px" height="145px" viewBox="0 0 178 145" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-price"></i>
                      </div>
                      <div class="text">Tarif</div>
                    </div>
            
                    <div class="menu" data-href="wna-flow">
                      <div class="icon-box">
                        <!-- <svg width="157px" height="156px" viewBox="0 0 157 156" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg> -->
                        <i class="icon-flow"></i>
                      </div>
                      <div class="text">Alur Proses</div>
                    </div>
            
                  </div>
                </div>
            
                <div class="float-menu">
                  <div class="nav-single to-dashboard" data-href="dashboard">
                    <i class="icon-dashboard"></i>
                    <span class="text">Dashboard</span>
                  </div>
                </div>
              </main>',
            ],
        ]);
    }
}
