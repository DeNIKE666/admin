@extends('layouts.cabinet')

@section('title', 'Создать депозит')

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('deposits.store') }}" method="POST">
                @CSRF
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($plans as $planItem)
                            <div class="col-md-4">
                                <label class="imagecheck mb-4 w-100">
                                    <input name="plan_id" type="checkbox" value="{{ $planItem->id }}" class="imagecheck-input">
                                    <figure class="imagecheck-figure p-5">
                                        <h1 class="pb-2">{{ $planItem->title }}</h1>
                                        <p>Дни вклада: {{ $planItem->days }}</p>
                                        <p>Процент: {{ $planItem->percent }} % </p>
                                    </figure>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="form-group">
                    <label for="amount">Сумма депозита</label>
                    <input type="text" class="form-control" name="amount" placeholder="1000">
                </div>

                <div class="form-group">
                    <button class="btn btn-outline-primary" type="submit">СОЗДАТЬ ДЕПОЗИТ</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            $('.imagecheck-figure').on('click', function() {
                var checkbox = $('.imagecheck-input');
                if (checkbox.is(':checked')) {
                    $(':checkbox[name="plan_id"]').attr('checked' ,true);
                    $(':checkbox[name="plan_id"]').not($(this)).prop({
                        'checked': false,
                        'required': false
                    });
                }
            });
        </script>
    @endpush
@endsection
