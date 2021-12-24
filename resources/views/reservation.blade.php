@extends('layouts.app')
@section('content')
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
<section class="page-banner" style="background: #121619 url(https://fasteats.xyz/content/website/images/blog-6.jpg) no-repeat center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="page-title">
                    <h1 class="page-headding">reservation</h1>
                    <ul>
                        <li><a href="index.html" class="page-name">Home</a></li>
                        <li>Reservation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div >
        <section class="our-dd" style="background: #121619;">
            <div class="our-ddOverLay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 p-2">
                            <div class="headding-part text-center pt-5 mb-4">
                                <!-- <p class="headding-sub">Faire une réservation en ligne</p> -->
                                <h2 class="headding-title text-uppercase font-weight-bold" style="color: #fff">RÉSERVER UNE TABLE</h2>
                                <!-- <h6 class="customHead pt-3">RÉSERVER UNE TABLE</h6> -->
                                <!-- <p class="re_offer">For Booking 30%</p> -->
                            </div>
            
                        </div>
                        <div class="col-12 col-md-6 p-3 bg-dd">
                          <div class="bannnerImage">
                            <img src="https://fasteats.xyz/storage/upload/logo/img_re-1638451793.jpg" class="img-fluid" alt="">
                          </div>
                        </div>
                        <div class="col-12 col-md-6 bg-dd p-0 bg-light" wire:ignore wire:poll>
                           @livewire('counter')
                        </div>
            
                        <div class="col-12  p-3">
                                                                <!-- step-1 -->
                                <div class="" id="step-1">
                                     <div class="form-group">
                                        <label for="" class="customlabel">Sélectionner Date</label>
                                        <input type="text" wire:model="date" class="form-control" name="date" placeholder="Sélectionner Date">
                                    </div>
                                    <button class="table-book" style="padding:10px; font-size: 14px" wire:click="firstStepSubmit" type="button">Next</button>
                                </div>
                                <!-- step-2 -->
                            <div class="display-none" id="step-2">
                                <!-- <p class="offer_discount">For Booking we offer 30% discount</p> -->
                                <div class="form-group">
                                    <label for="" class="customlabel">Nombre de personnes</label>
                                    <input type="text" class="form-control" wire:model="numberOfGuest" name="numberOfGuest" placeholder="Nombre de personnes">
                                </div>
                                <div class="form-group">
                                    <label for="" class="customlabel">Téléphone</label>
                                    <input type="text" class="form-control" wire:model="number" placeholder="Téléphone" name="number">
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-12 customlabel">Hour*</label>
                                    <select name="time" class="form-control" wire:model="time" data-placeholder="Hour">
                                           <option value="1">--Heure *--</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:15">12:15</option>
                                                <option value="12:30">12:30</option>
                                                <option value="12:45">12:45</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:15">13:15</option>
                                                <option value="13:30">13:30</option>
                                                <option value="13:45">13:45</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:15">14:15</option>
            
            
                                                <option value="12:00">19:00</option>
                                                <option value="12:00">19:15</option>
                                                <option value="19:30">19:30</option>
                                                <option value="19:45">19:45</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:15">20:15</option>
                                                <option value="20:45">20:30</option>
                                                <option value="12:00">20:45</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:15">21:15</option>
                                                <option value="21:30">21:30</option>
                                                <option value="21:45">21:45</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:15">22:15</option>
                                                <option value="22:30">22:30</option>
                                                <option value="22:45">22:45</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:15">23:15</option>
                                    </select>
                                </div>
                                <button class="table-book" style="padding:10px; font-size: 14px" type="button" wire:click="secondStepSubmit">Next</button>
                    <button class="table-book" style="padding:10px; font-size: 14px" type="button" wire:click="back(1)">Back</button>
                            </div>
            <!-- step-3 -->
                            <div class="display-none" id="step-3">
                                <!-- <p class="offer_discount">For Booking we offer 30% discount</p> -->
                                <div class="form-group">
                                    <label for="" class="customlabel">Nome et prénom</label>
                                    <input type="text" wire:model="name" class="form-control" placeholder="Nome et prénom" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="" class="customlabel">Tout message spécial</label>
                                    <input type="text" wire:model="msg" class="form-control" placeholder="Tout message spécial" name="msg">
                                </div>
            
            
                                <div class="form-group text-center">
                                    <button wire:click="submitForm" class="table-book" style="padding:1.5rem!important">		Réserver Une Table
                                    </button>
                                </div>
                            </div>
                            <!-- <a  class="table-book">ddd</a> -->
                            <!-- <button class="btn btn-primary" wire:click="hey">dfd</button> -->
                        </div>
                    </div>
                </div>
            </div>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
              timeZone: 'UTC',
            initialView: 'dayGridMonth',
          //   events: 'https://fullcalendar.io/demo-events.json?overload-day',
           editable: true,
           selectable: true,
           dateClick: function(info) {
          // alert('clicked ' + info.dateStr);
        },
      select: function(info) {
      //   alert('selected ' + info.startStr + ' to ' + info.endStr);
        $('.date').html(info.startStr);
      }
          });
          calendar.render();
        });

      </script>
</section>
</div>
@endsection
