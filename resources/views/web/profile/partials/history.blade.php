<div class="d-flex justify-content-between history-title-wrapper">
    <h5 class="text-size-large text-color-secondary">Lịch sử khóa học</h5>
    <select name="status" class="sort-status">
        <option value="all" selected>Tất cả</option>
        <option value="success">Thành công</option>
        <option value="canceled">Đã huỷ</option>
        <option value="pending">Chờ thanh toán</option>
    </select>
</div>
<div class="table-responsive">
    <table class="history-table">
        <thead>
        <tr>
            <th class="text-white text-size-normal-light">Mã đơn hàng</th>
            <th class="text-white text-size-normal-light">Ngày</th>
            <th class="text-white text-size-normal-light">Tên khóa học</th>
            <th class="text-white text-size-normal-light">Trạng thái</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><label class="text-color-secondary text-size-small-light">123456</label></td>
            <td><label class="text-color-secondary text-size-small-light">27/10/2024</label></td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Course" class="history-course-img"/>
                    <label class="text-color-secondary text-size-small-light">Tên khóa học</label>
                </div>
            </td>
            <td>
                <div class="d-flex justify-content-start align-items-center">
                    <span class="status-dot cancel-dot"></span>
                    <label class="history-cancel text-size-small-light">Đã hủy</label>
                </div>
            </td>
        </tr>
        <tr>
            <td><label class="text-color-secondary text-size-small-light">123456</label></td>
            <td><label class="text-color-secondary text-size-small-light">27/10/2024</label></td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Course" class="history-course-img"/>
                    <label class="text-color-secondary text-size-small-light">Tên khóa học</label>
                </div>
            </td>
            <td>
                <div class="d-flex justify-content-start align-items-center">
                    <span class="status-dot pending-dot"></span>
                    <label class="history-pending text-size-small-light">Chờ thanh toán</label>
                </div>
            </td>
        </tr>
        <tr>
            <td><label class="text-color-secondary text-size-small-light">123456</label></td>
            <td><label class="text-color-secondary text-size-small-light">27/10/2024</label></td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Course" class="history-course-img"/>
                    <label class="text-color-secondary text-size-small-light">Tên khóa học</label>
                </div>
            </td>
            <td>
                <div class="d-flex justify-content-start align-items-center">
                    <span class="status-dot success-dot"></span>
                    <label class="history-success text-size-small-light">Thành công</label>
                </div>
            </td>
        </tr>

        </tbody>
    </table>
</div>
