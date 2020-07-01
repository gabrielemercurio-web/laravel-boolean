@extends('layout.app')

@section('content')
    <section id="jumbotron"> {{-- * * * JUMBOTRON * * * --}}
        <div class="container-2">
            <div class="jumbo">

                <div class="jumbo-testo">
                    <h1>DIVENTA <strong>SVILUPPATORE WEB</strong></h1>
                    <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
                    <ul>
                        <li>6 mesi di corso intensivo online in diretta</li>
                        <li>Nessuna competenza di programmazione richiesta</li>
                        <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
                    </ul>
                </div>
                <div class="jumbo-gif">
                    <img src="{{ asset('images/pc-black-gif.gif') }}" alt="gif-mac">
                </div>

            </div>
        </div>
    </section> {{-- * * * END JUMBOTRON * * * --}}

    <main>
        <section id="numeri">
            <div class="numeri-container container-2">
                <div>
                    <h1>98%</h1>
                    <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
                </div>
                <div>
                    <h1>€ 23.000</h1>
                    <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
                </div>
                <div>
                    <h1>#1</h1>
                    <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
                </div>
            </div>
        </section>

        <section id="brands">
            <div class="container-2">
                <p>I nostri studenti sono stati assunti da:</p>
                <div class="wp-brands">
                    <div>
                        <img src="{{ asset('images/facileit.png') }}" alt="facile.it">
                    </div>
                    <div>
                        <img src="{{ asset('images/oneday.png') }}" alt="facile.it">
                    </div>
                    <div>
                        <img src="{{ asset('images/prima.png') }}" alt="facile.it">
                    </div>
                    <div>
                        <img src="{{ asset('images/fabbrica-digitale-big.png') }}" alt="facile.it">
                    </div>
                    <div>
                        <img src="{{ asset('images/nephila.png') }}" alt="facile.it">
                    </div>
                    <div>
                        <img src="{{ asset('images/rds.png') }}" alt="facile.it">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('head-title', 'Homepage')


