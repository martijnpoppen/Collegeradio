@extends('layouts.master')

@section('content')
    
    <div class="breadcrumb">
            <div class="container">
                <div class="col-md-4">Breadcrumb | <a href="/" style="color:#C40090;">Home</a> </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-2">Update: {{date('d-m-Y',strtotime($page->updated_at))}} </div>
            </div>
        </div>
        <div class="breadcrumb-hr"></div>

    
    <div class="post">
        <div class="container">
            <div class="col-md-4">
                 {{ HTML::image('media/images/1.jpg', $alt="Collegeradio Leeuwarden", $attributes = array('class' => 'img-responsive')) }}
            </div>
            <div class="col-md-8">
                <h2>Het meest recente uurtje</h2>
                <p>
                    Heb je de live uitzending gemist? Wil je de gehele uitzending nogmaals beluisteren? Klik dan hier!
                </p>
                <p><a class="btn btn-default" href="#" role="button">View details</a></p>
            </div>
            
                <div class="hr">{{ HTML::image('media/images/jack_kabel.png', $alt="Jack Kabel", $attributes = array('class' => 'img-responsive') ) }}</div>
        </div>
    </div>
    <a name="contact"></a>
    <div class="post">
        <div class="container">
            <div class="col-md-12">
                <h2>Partyguide</h2>
                <p>
                    Zin in een feestje en geen flauw benul waar je heen kan? Bekijk dan de party agenda. Alle feestjes in en rond Leeuwarden waar jij naar toe kan!
                </p>
                <p><a class="btn btn-default" href="#" role="button">View details</a></p>
                <div class="container">
                    <div class="hr">{{ HTML::image('media/images/jack_kabel.png', $alt="Jack Kabel", $attributes = array('class' => 'img-responsive') ) }}</div>
                </div>
            </div>
        </div>
    </div>

     <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2>Contact</h2>
                    <p>
                        Wil je een plaat aanvragen, of een keer in de studio aanschuiven met een mooi verhaal. Via het contactformulier kan je contact met ons opnemen.
                    </p>
                </div>
                <div class="col-md-6">


                    {{ Form:: open(array('url' => 'contact_request')) }} 
                    
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif


                    @foreach($errors->all('
                    :message
                    ') as $message) {{ $message }} @endforeach

                    <p>
                        {{ Form:: text ('first_name', '', array('placeholder' => 'voornaam') )}}
                    </p>
                    <p>
                       {{ Form:: text ('last_name', '', array('placeholder' => 'achternaam') )}} 
                    </p>
                    <p>
                        {{ Form:: text ('phone_number', '', array('placeholder' => '06xxxxxxx')) }}
                    </p>
                    <p>
                        {{ Form:: email ('email', '', array('placeholder' => 'me@example.nl')) }}
                    </p>
                    <p>
                        {{ Form:: textarea ('message', '', array('placeholder' => 'je bericht') )}}
                    </p>
                    <p>
                         {{ Form::submit('Verzenden', array('class' => 'btn btn-default')) }}
                    </p>

           
                    

                   

                    {{ Form:: close() }}

                </div>
                <div class="container">
                    <div class="hr">{{ HTML::image('media/images/jack_kabel.png', $alt="Jack Kabel", $attributes = array('class' => 'img-responsive') ) }}</div>
                </div>
             </div>
        </div>
    </div>
    <div class="post">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h2>Onze Hosts</h2>
                    <div class="hosts">
                        <div class="host">
                            {{ HTML::image('media/images/jelmer-hoofd.png', $alt="Collegeradio Leeuwarden", $attributes = array('class' => 'img-responsive circle-host')) }}
                            <p>Jelmer Westra</p>
                        </div>
                        <div class="host">
                            {{ HTML::image('media/images/douwe-hoofd.png', $alt="Collegeradio Leeuwarden", $attributes = array('class' => 'img-responsive circle-host')) }}
                            <p>Douwe Minkema</p>
                        </div>
                        <div class="host">
                           {{ HTML::image('media/images/almer-hoofd.png', $alt="Collegeradio Leeuwarden", $attributes = array('class' => 'img-responsive circle-host')) }}
                             <p>Almer Steegstra</p>
                        </div>
                        <div class="host">
                            {{ HTML::image('media/images/bouland-hoofd.png', $alt="Collegeradio Leeuwarden", $attributes = array('class' => 'img-responsive circle-host')) }}
                            <p>Jeroen Bouland</p>
                        </div>
                        <div class="host">
                            {{ HTML::image('media/images/daniel-hoofd.png', $alt="Collegeradio Leeuwarden", $attributes = array('class' => 'img-responsive circle-host')) }}
                            <p>Daniel Kolk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop