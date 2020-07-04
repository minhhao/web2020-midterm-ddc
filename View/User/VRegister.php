
          <form class="user" action="index.php?mod=User&act=signin" method="post">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="Tên Khách Hàng" required>
              </div>
              <div class="col-sm-6">
                <input type="text" name="phonenum" class="form-control form-control-user" id="examplephone" placeholder="Số Điện Thoại" required>
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Địa chỉ Email" required>
            </div>
            
       
            <input type="submit" value="Tạo Tài Khoản" class="btn btn-primary btn-user btn-block"/>
            <hr>
          </form>
