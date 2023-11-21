<div class="row">
            <div class="row">
                <h1>Control panner</h1>
            </div>
                <div class="row mb">
                    <div class="boxtitle">Sản phẩm mới</div>
                    <div class="boxcontent"></div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Sản phẩm xem nhiều</div>
                    <div class="boxcontent"></div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Bình luận mới</div>
                    <div class="boxcontent"></div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Đơn hàng mới</div>
                    <div class="boxcontent"></div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Biểu đồ thống kê sản phẩm theo danh mục</div>
                    <div class="boxcontent">
                        <canvas id="myChart"></canvas>

    <script>
        // Dữ liệu biểu đồ
        var data = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
            datasets: [{
                label: 'Doanh thu',
                data: [500, 800, 600, 900, 700, 1000],
                backgroundColor: 'rgba(75, 192, 192, 0.5)', // Màu nền cột
                borderColor: 'rgba(75, 192, 192, 1)', // Màu viền cột
                borderWidth: 1 // Độ dày viền cột
            }]
        };

        // Cấu hình biểu đồ
        var options = {
            scales: {
                y: {
                    beginAtZero: true // Hiển thị từ 0 đến giá trị cao nhất
                }
            }
        };

        // Tạo biểu đồ cột
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
                    </div>
                </div>
            </div>