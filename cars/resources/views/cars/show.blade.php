@extends ('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class='text-center'>
            <h1 class="text-5xl uppercase bold">
                {{ $car->name }}
            </h1>
            <p class="text-lg text-gray-700 py-6">
                {{ $car->headquarter->headquarters }}, {{ $car->headquarter->country }}
            </p>
        </div>
    </div>
    <div class="py-10 text-center">
        <div class="m-auto justify-center">
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Founded: {{ $car->founded }}
            </span>


            <p class="text-lg text-gray-700 py-6">
                {{ $car->description }}
            </p>

        </div>
        <div class="m-auto flex items-center justify-center">
            <table class="table-auto content-center">
                <tr class="bg-blue-100">
                    <th class="w-40 border-4 border-gray-500">
                        Model
                    </th>
                    <th class="w-40 border-4 border-gray-500">
                        Engines
                    </th>
                    <th class="w-40 border-4 border-gray-500">
                        Created at
                    </th>
                </tr>
                @forelse ($car->carModels as $model)
                    <tr>
                        <td class="border-4 border-gray-500">
                            {{ $model->model_name }}
                        </td>
                        <td class="border-4 border-gray-500">
                            @foreach ($car->engines as $engine)
                                @if ($model->id == $engine->model_id)
                                    {{ $engine->engine_name }}
                                @endif
                            @endforeach
                        </td>
                        <td class="border-4 border-gray-500">
                            @foreach ($car->productionDate as $productionDate)
                                @if ($model->id == $productionDate->model_id)
                                    {{ date('d-m-Y', strtotime($productionDate->created_at)) }}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @empty
                    <p>
                        No car models found!
                    </p>
                @endforelse

            </table>
        </div>
    @endsection
