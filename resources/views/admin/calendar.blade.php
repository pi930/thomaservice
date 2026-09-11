@extends('layouts.app')

@section('content')

<style>
    .calendar-wrapper {
        max-width: 1200px;
        margin: auto;
        padding: 40px 20px;
    }

    .calendar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        flex-wrap: wrap;
        gap: 10px;
    }

    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 10px;
    }

    .day-cell {
        background: #f7f9ff;
        border-radius: 10px;
        padding: 10px;
        min-height: 120px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        position: relative;
    }

    .day-number {
        font-weight: bold;
        margin-bottom: 8px;
        color: #0033cc;
        font-size: 18px;
    }

    .day-label {
        font-size: 13px;
        color: #666;
        margin-bottom: 5px;
    }

    .event {
        background: #0033cc;
        color: white;
        padding: 6px;
        border-radius: 6px;
        margin-top: 5px;
        font-size: 13px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        cursor: pointer;
        display: block;
    }

    /* Responsive smartphone */
    @media(max-width: 800px){
        .calendar-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .day-cell {
            min-height: 100px;
            padding: 12px;
        }

        .day-number {
            font-size: 20px;
        }

        .day-label {
            font-size: 14px;
        }

        .event {
            font-size: 15px;
            padding: 10px;
        }
    }
</style>

<div class="calendar-wrapper">

    <div class="calendar-header">
        <h2 style="margin:0;">Calendrier des rendez-vous</h2>
        <div style="font-size:18px; font-weight:bold; color:#0033cc;">
            {{ ucfirst($firstDay->translatedFormat('F Y')) }}
        </div>
    </div>

    <div class="calendar-grid">

        @php
            $daysOfWeek = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
            $startWeekDay = $firstDay->dayOfWeek; // 0 = dimanche
        @endphp

        {{-- Cases vides avant le 1er du mois --}}
        @for($i = 0; $i < $startWeekDay; $i++)
            <div class="day-cell"></div>
        @endfor

        {{-- Jours du mois --}}
        @for($day = 1; $day <= $daysInMonth; $day++)
            @php
                $currentDate = now()->setDay($day)->toDateString();
                $dayName = $daysOfWeek[now()->setDay($day)->dayOfWeek];
            @endphp

            <div class="day-cell">
                <div class="day-number">{{ $day }}</div>
                <div class="day-label">{{ $dayName }}</div>

                @foreach($contacts as $contact)
                    @if(optional($contact->rendezvous_date)->format('Y-m-d') === $currentDate)
                        <a href="/admin/dashboard#contact-{{ $contact->id }}" class="event">
                            {{ $contact->name }}<br>
                            {{ $contact->rendezvous_date->format('H:i') }}
                        </a>
                    @endif
                @endforeach
            </div>
        @endfor

    </div>

</div>

@endsection


