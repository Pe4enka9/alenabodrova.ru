@extends('theme')
@section('title', 'Личный кабинет')
@section('style', asset('css/admin-index-style.css'))

@section('admin')
    <div class="table">
        <main class="dflex table">
            <nav class="sidebar">
                <ul class="menu">
                    <li class="menu-item"><a href="#employees">Сотрудники</a></li>
                    <li class="menu-item"><a href="#services">Услуги</a></li>
                    <li class="menu-item"><a href="#users">Пользователи</a></li>
                    <li class="menu-item"><a href="#records">Записи</a></li>
                </ul>
            </nav>
            <div class="cont">
                <section class="sect">
                    <h1 class="name-sect">Записи</h1>
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            <th>Специализация</th>
                            <th>Стаж работы</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($stuffs as $stuff)
                            <tr>
                                <td>{{ $stuff->id }}</td>
                                <td>{{ $stuff->surname }}</td>
                                <td>{{ $stuff->name }}</td>
                                <td>{{ $stuff->patronymic }}</td>
                                <td>{{ $stuff->specializations->pluck('name')->implode(' / ') }}</td>
                                <td>{{ $stuff->experience }} года/год/лет</td>
                                <td>
                                    <a href="{{ route('admin.edit-stuff-form', $stuff) }}">
                                        <input type="submit" class="change-btn"
                                               style="background: #fbfbfb; color: black; border: 1px solid #f4f6f8;"
                                               value="Изменить">
                                    </a>
                                    <form action="{{ route('admin.delete-stuff', $stuff) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Удалить">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('admin.add-stuff-form') }}" class="add-btn">
                        <button>Добавить сотрудника</button>
                    </a>
                </section>
            </div>
        </main>

    </div>
@endsection
