<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Inserisci</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <livewire:CreateForm/>
        </div>
    </div>
</div>
</x-layout>