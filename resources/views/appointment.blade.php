@extends('theme')
@section('title', 'Запись')
@section('style', asset('css/reg-style.css'))
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="contact-info-container">
                <form action="{{ route('stuff.store', $user) }}" method="post">
                    @csrf

                    <div class="grid-form">
                        <h1 class="name-sect">Запись</h1>

                        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">

                        <div class="full-row">
                            <label for="date">Дата</label>
                            <input type="datetime-local" name="date" id="date" value="{{ old('date') }}">
                            @error('date') <p class="phoneError">{{ $message }}</p> @enderror
                        </div>

                        <div class="full-row">
                            <label for="category">Категория</label>
                            <select name="category" id="category" onchange="updateSubcategories()">
                                <option value="" selected hidden>Выберите категорию</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category') <p class="phoneError">{{ $message }}</p> @enderror
                        </div>

                        <div class="full-row hidden">
                            <label for="subcategory">Подкатегория</label>
                            <select name="subcategory" id="subcategory" onchange="updateServices()"></select>
                            @error('subcategory') <p class="phoneError">{{ $message }}</p> @enderror
                        </div>

                        <div class="full-row hidden">
                            <label for="specialist">Специалист</label>
                            <select name="specialist" id="specialist" onchange="updateLengths()">
                                <option value="" selected hidden>Выберите специалиста</option>
                                @foreach($specializations as $specialization)
                                    <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                @endforeach
                            </select>
                            @error('specialist') <p class="phoneError">{{ $message }}</p> @enderror
                        </div>

                        <div class="full-row hidden">
                            <label for="length">Длина</label>
                            <select name="length" id="length">
                                <option value="" selected hidden>Выберите длину</option>
                                @foreach($lengths as $length)
                                    <option value="{{ $length->id }}">{{ $length->name }}</option>
                                @endforeach
                            </select>
                            @error('length') <p class="phoneError">{{ $message }}</p> @enderror
                        </div>

                        <input type="submit" class="reg" value="Записаться">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>

    <script>
        function updateSubcategories() {
            const categoryId = document.getElementById('category').value;
            const subcategory = document.getElementById('subcategory');
            subcategory.innerHTML = '';

            const opt = document.createElement('option');
            opt.value = '';
            opt.setAttribute('selected', '');
            opt.setAttribute('hidden', '');
            opt.textContent = 'Выберите подкатегорию';

            subcategory.appendChild(opt);

            fetch("{{ route('getSubcategoriesByCategory', '') }}/" + categoryId)
                .then(res => res.json())
                .then(subcategories => {
                    const subcategoryField = document.getElementById('subcategory');
                    subcategoryField.parentElement.classList.remove('hidden');

                    subcategories.forEach(subcategory => {
                        const option = document.createElement('option');
                        option.value = subcategory.id;
                        option.textContent = subcategory.name;

                        subcategoryField.append(option);
                    });
                })
                .catch(err => console.log(err))
        }

        function updateServices() {
            const specialistField = document.getElementById('specialist');
            specialistField.parentElement.classList.remove('hidden');
        }

        function updateLengths() {
            const lengthField = document.getElementById('length');
            lengthField.parentElement.classList.remove('hidden');
        }
    </script>
@endsection
