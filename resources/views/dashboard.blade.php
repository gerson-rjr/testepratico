<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="/home" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="image">Adicione uma imagem ao perfil:</label>
                    <input type="file" name="image" >
                    <button type="submit">Salvar Imagem</button>
                </form>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="/api/cep" method="GET">
                    @csrf
                    <label for="cep">Informe um CEP</label>
                    <input type="input" id="cep" name="cep">
                    <button type="submit">Consultar CEP</button>
                </form>
                @if(isset($cep))
                    <form action="/cep" method="POST">
                        @csrf
                        <input class="rounded" name="cep" value="{{$cep}}"/>
                        <input class="rounded" name="logradouro" value="{{$logradouro}}"/>
                        <input class="rounded" name="complemento" value="{{$complemento}}"/>
                        <input class="rounded" name="bairro" value="{{$bairro}}"/>
                        <input class="rounded" name="localidade" value="{{$localidade}}"/>
                        <input class="rounded" name="uf" value="{{$uf}}"/>
                        <input class="rounded" name="ibge" value="{{$ibge}}"/>
                        <input class="rounded" name="gia" value="{{$gia}}"/>
                        <input class="rounded" name="ddd" value="{{$ddd}}"/>
                        <input class="rounded" name="siafi" value="{{$siafi}}"/>
                        <button type="submit">Salvar</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>