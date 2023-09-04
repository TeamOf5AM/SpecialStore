@extends('front/layout')
@section('page_title','Services')
@section('container')

<div class="container my-5">
    <div class="card shadow-lg p-5">
        <h1 class="text-center text-uppercase fw-bold">Solar Calculator</h1>
        <div class="col-12 p-5">
          <form id="solar_calculator_form">
            <table class="table table-bordered border-dark">
              <thead>
                <tr>
                  <th>S No.</th>
                  <th style="width:40%;">Appliances</th>
                  <th>Power Watts</th>
                  <th>Hrs used in per day</th>
                </tr>
              </thead>
              <tbody>
                <?php for($k=0;$k<=10;$k++){ ?>
                <tr>
                  <td><?php echo $k ?></td>
                  <td>
                    <div class="row">
                      <div class="col-md-4">
                        <select  class="form-select form-select-sm w-100" id="app_qty<?php echo$k?>">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">5</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="20">20</option>
                          <option value="30">30</option>
                        </select>
                      </div>
                      <div class="col-md-5">
                        <span class="form-group-text ps-3 my-auto fw-bold">
                          <?php
                          if($k == 0)
                          {
                            echo "FL Lamps";
                          }
                          elseif($k == 1)
                          {
                            echo "Ceiling Fans";
                          }
                          elseif($k == 2)
                          {
                            echo "Table Fan";
                          }
                          elseif($k == 3)
                          {
                            echo "Television";
                          }
                          elseif($k == 4)
                          {
                            echo "Refrigerator";
                          }
                          elseif($k == 5)
                          {
                            echo "DVD";
                          }
                          elseif($k == 6)
                          {
                            echo "Laptop Charger";
                          }
                          elseif($k == 7)
                          {
                            echo "Washing Machine";
                          }
                          elseif($k == 8)
                          {
                            echo "Mobile Charger";
                          }
                          elseif($k == 9)
                          {
                            echo "Microwave Oven";
                          }
                          elseif($k == 10)
                          {
                            echo "Ac";
                          }
                          ?>
                        </span>
                      </div>
                    </div>
                  </td>
                  <td>
                      <input class="form-control form-control-sm" id="power<?php echo$k ?>">
                  </td>
                  <td>
                      <select class="form-select form-select-sm" id="hrs<?php echo$k ?>">
                        <?php
                         for( $i = 1 ; $i<=24 ; $i++){
                          echo "<option value='$i'>".$i."</option>";
                         }?>
                      </select>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <div class="col-6 mx-auto my-5">
              <input class="w-100 btn btn-dark" type="submit" value="Calculate">
            </div>
          </form>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8 p-5">
              <h4 class="fw-bold">Size of The Solar Sytem</h4>
              <p>No. of pannels required : <span class="fw-bold" id="size_of_solar"> 0 </span> Pannels Required</p>
              <!-- <h4>Size of The Solar Sytem</h4>
              <p id="size_of_solar"></p>
              <h4>Size of The Solar Sytem</h4>
              <p id="size_of_solar"></p> -->
            </div>
        </div>
    </div>
</div>

<!-- <form id="myform">
        <input type="text" id="name">
        <input type="text" id="email">
        <input type="submit" value="submit">
    </form> -->

    <script>
        var form = document.getElementById('solar_calculator_form');
        form.addEventListener('submit',function(event){
            event.preventDefault();
            // const form1 = document.querySelector('solar_calculator_form');
            const app_qty=[];
            for(let i=0; i<=10 ; i++)
            {
              app_qty[i] = document.getElementById(`app_qty`+i).value;
            }
            const power=[];
            for(let i=0; i<=10 ; i++)
            {
              power[i] = document.getElementById(`power`+i).value;
            }
            const hrs=[];
            for(let i=0; i<=10 ; i++)
            {
              hrs[i] = document.getElementById(`hrs`+i).value;
            }
            // alert(app_qty);
            // alert(power);
            // alert(hrs);

            //calculation Starts
            const dumy_total=[];
            for(i=0 ; i<=10 ; i++)
            {
              dumy_total[i]= app_qty[i]*power[i]*hrs[i];
            }
            for(i=0 ; i<=10 ; i++)
            {
              dumy_total[i]= app_qty[i]*power[i]*hrs[i];
            }
            alert(dumy_total);
            var total=0;
            for(i=0 ; i<=10 ; i++)
            {
              total += dumy_total[i];
            }
            // alert(total);

            total *= 1.3;

            total /= 480;
            
            // alert(total);
            
            document.getElementById('size_of_solar').innerHTML = Math.round(total);
        })
    </script>

@endsection