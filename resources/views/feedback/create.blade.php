<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Имя, фамилия"
           required maxlength="100" value="{{ old('name') ?? '' }}">
</div>
<div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Адрес почты"
           required maxlength="100" value="{{ old('email') ?? '' }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="phone" placeholder="Номер телефона"
           value="{{ old('phone') ?? '' }}">
</div>
<div class="form-group">
        <textarea class="form-control" name="message" placeholder="Ваше сообщение"
                  required maxlength="500" rows="3">{{ old('message') ?? '' }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Отправить</button>
</div>