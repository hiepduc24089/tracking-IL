<div class="activity-wrapper">
    <h5 class="text-size-large text-color-secondary information-title">Nhật ký hoạt động</h5>
    <div class="d-flex align-items-center">
        <div class="select-wrapper me-3">
            <label>Năm</label>
            <select name="year" class="select-field w-100 {{ $errors->has('year') ? 'input-field-error' : '' }}">
                <option value="" disabled selected>Năm</option>
                @for ($year = date('Y'); $year >= 2000; $year--)
                    <option value="{{ $year }}" {{ old('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                @endfor
            </select>
        </div>
        <div class="select-wrapper me-3">
            <label>Tháng</label>
            <select name="month" class="select-field w-100 {{ $errors->has('month') ? 'input-field-error' : '' }}">
                <option value="" disabled selected>Tháng</option>
                @for ($month = 1; $month <= 12; $month++)
                    <option value="{{ $month }}" {{ old('month') == $month ? 'selected' : '' }}>{{ $month }}</option>
                @endfor
            </select>
        </div>
        <div class="select-wrapper">
            <label>Ngày</label>
            <select name="day" class="select-field w-100 {{ $errors->has('day') ? 'input-field-error' : '' }}">
                <option value="" disabled selected>Ngày</option>
                @for ($day = 1; $day <= 31; $day++)
                    <option value="{{ $day }}" {{ old('day') == $day ? 'selected' : '' }}>{{ $day }}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="activity-date-wrapper">
        <p class="text-color-secondary text-size-normal-light mb-2">20 tháng 9, 2024</p>
        <div class="activity-list">
            <div class="activity-detail">
                <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Sample" class="activity-image" />
                <div class="text-color-secondary text-size-normal-light">
                    <span>Bạn đã thích </span>
                    <span class="text-decoration-underline fw-800">bài viết</span>
                    <span>trên </span>
                    <span class="text-decoration-underline fw-800">Góc cha mẹ</span>
                </div>
            </div>
            <div class="activity-detail">
                <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Sample" class="activity-image" />
                <div class="text-color-secondary text-size-normal-light">
                    <span>Bạn đã thích </span>
                    <span class="text-decoration-underline fw-800">bài viết</span>
                    <span>trên </span>
                    <span class="text-decoration-underline fw-800">Góc cha mẹ</span>
                </div>
            </div>
            <div class="activity-detail">
                <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Sample" class="activity-image" />
                <div class="text-color-secondary text-size-normal-light">
                    <span>Bạn đã thích </span>
                    <span class="text-decoration-underline fw-800">bài viết</span>
                    <span>trên </span>
                    <span class="text-decoration-underline fw-800">Góc cha mẹ</span>
                </div>
            </div>
            <div class="activity-detail">
                <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Sample" class="activity-image" />
                <div class="text-color-secondary text-size-normal-light">
                    <span>Bạn đã thích </span>
                    <span class="text-decoration-underline fw-800">bài viết</span>
                    <span>trên </span>
                    <span class="text-decoration-underline fw-800">Góc cha mẹ</span>
                </div>
            </div>
        </div>
    </div>
</div>
