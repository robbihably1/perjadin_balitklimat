<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold text-primary">Selamat datang, <?php echo $this->db->where('email', $this->session->userdata('email'))->get('data_pegawai')->row('nama_pegawai'); ?></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Total Pegawai</p>
                <p class="fs-30 mb-2">4006</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Total Pegawai PNS</p>
                <p class="fs-30 mb-2">61344</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Total Pegawai PNS/TB</p>
                <p class="fs-30 mb-2">4006</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Total Pegawai CPNS</p>
                <p class="fs-30 mb-2">61344</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Top Products</p>
            <div class="table-responsive">
              <table class="table table-striped table-borderless">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Search Engine Marketing</td>
                    <td class="font-weight-bold">$362</td>
                    <td>21 Sep 2018</td>
                    <td class="font-weight-medium">
                      <div class="badge badge-success">Completed</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Search Engine Optimization</td>
                    <td class="font-weight-bold">$116</td>
                    <td>13 Jun 2018</td>
                    <td class="font-weight-medium">
                      <div class="badge badge-success">Completed</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Display Advertising</td>
                    <td class="font-weight-bold">$551</td>
                    <td>28 Sep 2018</td>
                    <td class="font-weight-medium">
                      <div class="badge badge-warning">Pending</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Pay Per Click Advertising</td>
                    <td class="font-weight-bold">$523</td>
                    <td>30 Jun 2018</td>
                    <td class="font-weight-medium">
                      <div class="badge badge-warning">Pending</div>
                    </td>
                  </tr>
                  <tr>
                    <td>E-Mail Marketing</td>
                    <td class="font-weight-bold">$781</td>
                    <td>01 Nov 2018</td>
                    <td class="font-weight-medium">
                      <div class="badge badge-danger">Cancelled</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Referral Marketing</td>
                    <td class="font-weight-bold">$283</td>
                    <td>20 Mar 2018</td>
                    <td class="font-weight-medium">
                      <div class="badge badge-warning">Pending</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Social media marketing</td>
                    <td class="font-weight-bold">$897</td>
                    <td>26 Oct 2018</td>
                    <td class="font-weight-medium">
                      <div class="badge badge-success">Completed</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Projects</p>
            <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th class="pl-0  pb-2 border-bottom">Places</th>
                    <th class="border-bottom pb-2">Orders</th>
                    <th class="border-bottom pb-2">Users</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pl-0">Kentucky</td>
                    <td>
                      <p class="mb-0"><span class="font-weight-bold mr-2">65</span>(2.15%)</p>
                    </td>
                    <td class="text-muted">65</td>
                  </tr>
                  <tr>
                    <td class="pl-0">Ohio</td>
                    <td>
                      <p class="mb-0"><span class="font-weight-bold mr-2">54</span>(3.25%)</p>
                    </td>
                    <td class="text-muted">51</td>
                  </tr>
                  <tr>
                    <td class="pl-0">Nevada</td>
                    <td>
                      <p class="mb-0"><span class="font-weight-bold mr-2">22</span>(2.22%)</p>
                    </td>
                    <td class="text-muted">32</td>
                  </tr>
                  <tr>
                    <td class="pl-0">North Carolina</td>
                    <td>
                      <p class="mb-0"><span class="font-weight-bold mr-2">46</span>(3.27%)</p>
                    </td>
                    <td class="text-muted">15</td>
                  </tr>
                  <tr>
                    <td class="pl-0">Montana</td>
                    <td>
                      <p class="mb-0"><span class="font-weight-bold mr-2">17</span>(1.25%)</p>
                    </td>
                    <td class="text-muted">25</td>
                  </tr>
                  <tr>
                    <td class="pl-0">Nevada</td>
                    <td>
                      <p class="mb-0"><span class="font-weight-bold mr-2">52</span>(3.11%)</p>
                    </td>
                    <td class="text-muted">71</td>
                  </tr>
                  <tr>
                    <td class="pl-0 pb-0">Louisiana</td>
                    <td class="pb-0">
                      <p class="mb-0"><span class="font-weight-bold mr-2">25</span>(1.32%)</p>
                    </td>
                    <td class="pb-0">14</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->