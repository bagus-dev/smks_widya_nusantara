<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;
use App\Models\SchoolYearModel;
use App\Models\HeadmasterModel;
use App\Models\SchoolHistoryModel;
use App\Models\VisionMissionModel;
use App\Models\TeacherModel;
use App\Models\MajorModel;
use App\Models\ContactModel;
use App\Models\RegistreqModel;
use App\Models\RegistProcedureModel;
use App\Models\AboutModel;
use App\Models\ScheduleModel;
use App\Models\StumajModel;
use App\Models\BiodataModel;

class Backend extends BaseController
{
    protected $userModel, $schoolyearModel, $headmasterModel, $schoolhistoryModel, $visionModel, $teacherModel, $majorModel, $contactModel, $registreqModel, $registprocModel,
    $aboutModel, $scheduleModel, $year, $stumajModel, $bioModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->schoolyearModel = new SchoolYearModel();
        $this->headmasterModel = new HeadmasterModel();
        $this->schoolhistoryModel = new SchoolHistoryModel();
        $this->visionModel = new VisionMissionModel();
        $this->teacherModel = new TeacherModel();
        $this->majorModel = new MajorModel();
        $this->contactModel = new ContactModel();
        $this->registreqModel = new RegistreqModel();
        $this->registprocModel = new RegistProcedureModel();
        $this->aboutModel = new AboutModel();
        $this->scheduleModel = new ScheduleModel();
        $this->stumajModel = new StumajModel();
        $this->bioModel = new BiodataModel();

        $this->year = $this->schoolyearModel->where('status',1)->asObject()->first();
    }

    public function index()
    {
        $id = user()->id;

        $data = [
            'title' => 'Dasbor',
            'year' => $this->year,
            'users' => $this->userModel->where(['id !=' => $id, 'year_id' => $this->year->id])->findAll(),
            'tkj' => $this->stumajModel->join('users','student_major.user_id=users.id')->where(['student_major.id' => 1, 'year_id' => $this->year->id])->findAll(),
            'ap' => $this->stumajModel->join('users','student_major.user_id=users.id')->where(['student_major.id' => 2, 'year_id' => $this->year->id])->findAll(),
            'mp' => $this->stumajModel->join('users','student_major.user_id=users.id')->where(['student_major.id' => 3, 'year_id' => $this->year->id])->findAll(),
            'latest' => $this->userModel->select('users.fullname, student_biodata.*')->join('student_biodata','users.id=student_biodata.user_id')->where(['users.id !=' => $id, 'year_id' => $this->year->id])->orderBy('created_at','DESC')->findAll(5),
            'majors' => $this->majorModel->findAll(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/index', $data);
    }

    public function school_year()
    {
        $id = user()->id;

        $data = [
            'title' => 'Tahun Ajaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'years' => $this->schoolyearModel->asObject()->findAll(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/year/index', $data);
    }

    public function add_school_year()
    {
        $id = user()->id;

        $data = [
            'title' => 'Tahun Ajaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'profile' => $this->userModel->where('id',$id)->first(),
            'validation' => \Config\Services::validation()
        ];

        return view('backend/year/add', $data);
    }

    public function save_school_year()
    {
        if(!$this->validate([
            'school_year' => [
                'rules' => 'required',
                'label' => 'Tahun Ajaran'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Tahun Ajaran Gagal Disimpan!');
        }

        $this->schoolyearModel->insert([
            'school_year' => $this->request->getPost('school_year'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/school_year')->with('success', 'Tahun Ajaran Berhasil Disimpan');
    }

    public function edit_school_year($id_s)
    {
        $id = user()->id;

        $data = [
            'title' => 'Tahun Ajaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'year' => $this->schoolyearModel->where('id',$id_s)->asObject()->first(),
            'profile' => $this->userModel->where('id',$id)->first(),
            'validation' => \Config\Services::validation()
        ];

        return view('backend/year/edit', $data);
    }

    public function update_school_year()
    {
        if(!$this->validate([
            'school_year' => [
                'rules' => 'required',
                'label' => 'Tahun Ajaran'
            ],
            'status' => [
                'rules' => 'required|in_list[0,1]|statusYear[status]',
                'label' => 'Status',
                'errors' => [
                    'in_list' => 'Status Harus Dipilih!',
                    'statusYear' => 'Tahun Ajaran dengan status Aktif sudah ada!'
                ]
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Tahun Ajaran Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');
        
        $this->schoolyearModel->update($id, [
            'school_year' => $this->request->getPost('school_year'),
            'status' => $this->request->getPost('status'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/school_year')->with('success', 'Tahun Ajaran Berhasil Disimpan');
    }

    public function delete_school_year()
    {
        if($this->schoolyearModel->where('id',$this->request->getPost('id'))->delete()) {
            return redirect()->to('admin/dashboard/school_year')->with('success', 'Tahun Ajaran Berhasil Dihapus');
        }

        return redirect()->back()->with('failed', 'Tahun Ajaran Gagal Dihapus!');
    }

    public function headmaster_welcome()
    {
        $id = user()->id;

        $data = [
            'title' => 'Sambutan Kepsek',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'welcome' => $this->headmasterModel->asObject()->first(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/welcome', $data);
    }

    public function update_headmaster_welcome()
    {
        if(!$this->validate([
            'description' => [
                'rules' => 'required',
                'label' => 'Deskripsi'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Sambutan Kepsek Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');

        $this->headmasterModel->update($id, [
            'description' => $this->request->getPost('description'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/headmaster_welcome')->with('success', 'Sambutan Kepsek Berhasil Disimpan');
    }

    public function upload_summernote()
    {
        if(!$this->validate([
            'image' => [
                'rules' => 'max_size[image,512]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'label' => 'Gambar'
            ]
        ])) {
            $response['status'] = 0;
        }

        $image = $this->request->getFile('image');
        $image_name = $image->getName();

        $image->move('assets/img/summernote');

        $response['status'] = 1;
        $response['url'] = base_url('assets/img/summernote/'.$image_name);

        return json_encode($response);
    }

    public function delete_summernote()
    {
        $src = $this->request->getPost('src');
        $file = str_replace(base_url().'/', "", $src);

        if(unlink($file)) {
            $response = 1;
        } else {
            $response = 0;
        }

        echo $response;
    }

    public function school_history()
    {
        $id = user()->id;

        $data = [
            'title' => 'Sejarah Sekolah',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'history' => $this->schoolhistoryModel->asObject()->first(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/history', $data);
    }

    public function update_school_history()
    {
        if(!$this->validate([
            'description' => [
                'rules' => 'required',
                'label' => 'Deskripsi'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Sejarah Sekolah Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');

        $this->schoolhistoryModel->update($id, [
            'description' => $this->request->getPost('description'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/school_history')->with('success', 'Sejarah Sekolah Berhasil Disimpan');
    }

    public function vision_mission()
    {
        $id = user()->id;

        $data = [
            'title' => 'Visi, Misi dan Tujuan',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'vm' => $this->visionModel->asObject()->first(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/vision', $data);
    }

    public function update_vision_mission()
    {
        if(!$this->validate([
            'description' => [
                'rules' => 'required',
                'label' => 'Deskripsi'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Visi, Misi dan Tujuan Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');

        $this->visionModel->update($id, [
            'description' => $this->request->getPost('description'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/vision_mission')->with('success', 'Visi, Misi dan Tujuan Berhasil Disimpan');
    }

    public function teacher_list()
    {
        $id = user()->id;

        $data = [
            'title' => 'Daftar Guru',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'teachers' => $this->teacherModel->asObject()->findAll(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/teacher/index', $data);
    }

    public function add_teacher_list()
    {
        $id = user()->id;

        $data = [
            'title' => 'Daftar Guru',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'sequences' => $this->teacherModel->where('front_status',1)->findAll(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/teacher/add', $data);
    }

    public function save_teacher_list()
    {
        if(isset($_POST['homeroom_status'])) {
            $rule_homeroom = 'required';
            $homeroom_status = 1;
            $homeroom = $this->request->getPost('homeroom');
        } else {
            $rule_homeroom = 'permit_empty';
            $homeroom_status = 0;
            $homeroom = '';
        }

        if(isset($_POST['front_status'])) {
            $rule_front = "required|in_list[1,2,3]";
            $front_status = 1;
            $front = $this->request->getPost('front_seq');
        } else {
            $rule_front = "permit_empty";
            $front_status = 0;
            $front = "";
        }

        if(isset($_POST['image_status'])) {
            if($this->request->getFile('image') != "") {
                $rule_image = 'max_size[image,512]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]';
            } else {
                $rule_image = "required";
            }
        } else {
            $rule_image = 'permit_empty';
        }

        if(!$this->validate([
            'name' => [
                'rules' => 'required',
                'label' => 'Nama Guru'
            ],
            'position' => [
                'rules' => 'required',
                'label' => 'Posisi'
            ],
            'homeroom' => [
                'rules' => $rule_homeroom,
                'label' => 'Wali Kelas'
            ],
            'phone' => [
                'rules' => 'required|is_unique[teacher_list.phone]',
                'label' => 'Nomor HP'
            ],
            'short_desc' => [
                'rules' => 'required|max_length[100]',
                'label' => 'Deskripsi Singkat'
            ],
            'front_seq' => [
                'rules' => $rule_front,
                'label' => 'Urutan Ke',
                'errors' => [
                    'in_list' => 'Urutan yang bisa dipilih adalah 1/2/3!'
                ]
            ],
            'image' => [
                'rules' => $rule_image,
                'label' => 'Foto Guru'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Daftar Guru Gagal Disimpan!');
        }

        if($rule_image !== 'permit_empty') {
            $image = $this->request->getFile('image');
            $image_name = $image->getName();

            if($image_name !== 'avatar-1.png') {
                $image->move('assets/img/teachers');
            }
        } else {
            $image_name = "";
        }

        $this->teacherModel->insert([
            'name' => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'homeroom_status' => $homeroom_status,
            'homeroom' => $homeroom,
            'phone' => $this->request->getPost('phone'),
            'short_desc' => $this->request->getPost('short_desc'),
            'front_status' => $front_status,
            'front_seq' => $front,
            'image' => $image_name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/teacher_list')->with('success', 'Daftar Guru Berhasil Disimpan');
    }

    public function edit_teacher_list($id_t)
    {
        $id = user()->id;

        $data = [
            'title' => 'Daftar Guru',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'sequences' => $this->teacherModel->where('front_status',1)->findAll(),
            'teacher' => $this->teacherModel->where('id',$id_t)->asObject()->first(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/teacher/edit', $data);
    }

    public function update_teacher_list_basic()
    {
        $id = $this->request->getPost('id');

        if(isset($_POST['homeroom_status'])) {
            $rule_homeroom = 'required';
            $homeroom_status = 1;
            $homeroom = $this->request->getPost('homeroom');
        } else {
            $rule_homeroom = 'permit_empty';
            $homeroom_status = 0;
            $homeroom = '';
        }

        if(isset($_POST['front_status'])) {
            $cek = $this->teacherModel->where('id',$id)->asObject()->first();

            if($cek->front_status == 1 AND $this->request->getPost('front_seq') == "") {
                $rule_front = "permit_empty";
                $front_status = 1;
                $front = $cek->front_seq;
            } else {
                $rule_front = "required|in_list[1,2,3]";
                $front_status = 1;
                $front = $this->request->getPost('front_seq');
            }
        } else {
            $rule_front = "permit_empty";
            $front_status = 0;
            $front = "";
        }

        if(!$this->validate([
            'name' => [
                'rules' => 'required',
                'label' => 'Nama Guru'
            ],
            'position' => [
                'rules' => 'required',
                'label' => 'Posisi'
            ],
            'homeroom' => [
                'rules' => $rule_homeroom,
                'label' => 'Wali Kelas'
            ],
            'phone' => [
                'rules' => 'required|is_unique[teacher_list.phone,phone,'.$this->request->getPost('phone').']',
                'label' => 'Nomor HP'
            ],
            'short_desc' => [
                'rules' => 'required|max_length[100]',
                'label' => 'Deskripsi Singkat'
            ],
            'front_seq' => [
                'rules' => $rule_front,
                'label' => 'Urutan Ke',
                'errors' => [
                    'in_list' => 'Urutan yang bisa dipilih adalah 1/2/3!'
                ]
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Daftar Guru Gagal Disimpan!');
        }

        $this->teacherModel->update($id, [
            'name' => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'homeroom_status' => $homeroom_status,
            'homeroom' => $homeroom,
            'phone' => $this->request->getPost('phone'),
            'short_desc' => $this->request->getPost('short_desc'),
            'front_status' => $front_status,
            'front_seq' => $front,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/teacher_list')->with('success', 'Daftar Guru Berhasil Disimpan');
    }

    public function update_teacher_list_image()
    {
        if(!$this->validate([
            'image' => [
                'rules' => 'max_size[image,512]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'label' => 'Foto Guru'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Foto Guru Gagal Disimpan!');
        }

        $image = $this->request->getFile('image');
        $image_name = $image->getName();

        if($image_name !== 'avatar-1.png') {
            $image->move('assets/img/teachers');
        }

        $old_image = $this->request->getPost('image_old');

        if($old_image !== "avatar-1.png") {
            unlink('assets/img/teachers/' . $old_image);
        }

        $id = $this->request->getPost('id');

        $this->teacherModel->update($id, [
            'image' => $image_name
        ]);
        
        return redirect()->to('admin/dashboard/teacher_list')->with('success', 'Foto Guru Berhasil Disimpan');
    }

    public function delete_teacher_list()
    {
        $id = $this->request->getPost('id');
        $teacher = $this->teacherModel->where('id',$id)->asObject()->first();

        if($teacher->image != "avatar-1.png" AND $teacher->image != "") {
            unlink('assets/img/teachers/'.$teacher->image);
        }

        if($this->teacherModel->where('id',$id)->delete()) {
            return redirect()->to('admin/dashboard/teacher_list')->with('success', 'Daftar Guru Berhasil Dihapus');
        }

        return redirect()->back()->with('failed', 'Daftar Guru Gagal Dihapus!');
    }

    public function major()
    {
        $id = user()->id;

        $data = [
            'title' => 'Jurusan',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->asObject()->findAll(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/major/index', $data);
    }

    public function add_major()
    {
        $id = user()->id;

        $data = [
            'title' => 'Jurusan',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/major/add', $data);
    }

    public function save_major()
    {
        if(!$this->validate([
            'name' => [
                'rules' => 'required',
                'label' => 'Nama Jurusan'
            ],
            'description' => [
                'rules' => 'required',
                'label' => 'Deskripsi'
            ],
            'image' => [
                'rules' => 'max_size[image,512]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'label' => 'Foto Jurusan'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Jurusan Gagal Disimpan!');
        }

        $slug = url_title($this->request->getPost('name'), '-', true);
        $image = $this->request->getFile('image');
        $image_name = $image->getName();

        $image->move('assets/img/majors');

        $this->majorModel->insert([
            'name' => $this->request->getPost('name'),
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
            'image' => $image_name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        
        return redirect()->to('admin/dashboard/major')->with('success', 'Jurusan Berhasil Disimpan');
    }

    public function edit_major($id_m)
    {
        $id = user()->id;

        $data = [
            'title' => 'Jurusan',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'major' => $this->majorModel->where('id',$id_m)->asObject()->first(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/major/edit', $data);
    }

    public function update_major()
    {
        if(!$this->validate([
            'name' => [
                'rules' => 'required',
                'label' => 'Nama Jurusan'
            ],
            'description' => [
                'rules' => 'required',
                'label' => 'Deskripsi'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Jurusan Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');
        $slug = url_title($this->request->getPost('name'), '-', true);

        $this->majorModel->update($id, [
            'name' => $this->request->getPost('name'),
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/major')->with('success', 'Jurusan Berhasil Disimpan');
    }

    public function update_image()
    {
        if(!$this->validate([
            'image' => [
                'rules' => 'max_size[image,512]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'label' => 'Foto Jurusan'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Jurusan Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');
        $image = $this->request->getFile('image');
        $image_name = $image->getName();

        $image->move('assets/img/majors');

        $old_image = $this->request->getPost('image_old');
        unlink('assets/img/majors/' . $old_image);

        $this->majorModel->update($id, [
            'image' => $image_name
        ]);

        return redirect()->to('admin/dashboard/major')->with('success', 'Jurusan Berhasil Disimpan');
    }

    public function delete_major()
    {
        $id = $this->request->getPost('id');
        $major = $this->majorModel->where('id',$id)->asObject()->first();
    }

    public function about_site()
    {
        $id = user()->id;

        $data = [
            'title' => 'Tentang Situs',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/about', $data);
    }

    public function update_about_site()
    {
        if(!$this->validate([
            'about' => [
                'rules' => 'required',
                'label' => 'Tentang'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Tentang Situs Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');

        $this->aboutModel->update($id, [
            'about' => $this->request->getPost('about'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/about_site')->with('success', 'Tentang Situs Berhasil Disimpan');
    }

    public function contact()
    {
        $id = user()->id;

        $data = [
            'title' => 'Kontak Kami',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'contact' => $this->contactModel->asObject()->first(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/contact', $data);
    }

    public function update_contact()
    {
        if(!$this->validate([
            'phone' => [
                'rules' => 'required',
                'label' => 'Telepon'
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'label' => 'Alamat Email'
            ],
            'address' => [
                'rules' => 'required',
                'label' => 'Alamat Sekolah'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Kontak Kami Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');

        $this->contactModel->update($id, [
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/contact')->with('success', 'Kontak Kami Berhasil Disimpan');
    }

    public function regist_schedule()
    {
        $id = user()->id;

        $data = [
            'title' => 'Jadwal Pendaftaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/registration/schedule', $data);
    }

    public function regist_schedule_load()
    {
        $event = $this->scheduleModel->asObject()->findAll();

        if(count($event) > 0) {
            foreach($event as $e) {
                $start = date("H:i:s",strtotime($e->start_event));
                $end = date("H:i:s",strtotime($e->end_event));

                if($start == $end) {
                    $allDay = true;
                } else {
                    $allDay = false;
                }

                $data[] = array(
                    'id' => $e->id,
                    'title' => $e->title,
                    'start' => $e->start_event,
                    'end' => $e->end_event,
                    'allDay' => $allDay
                );
            }
        } else {
            $data[] = array();
        }

        return json_encode($data);
    }

    public function regist_schedule_save()
    {
        $title = $this->request->getPost('title');

		if($title !== "" AND $title !== NULL) {
			$start_event = date("Y-m-d H:i:s",strtotime($this->request->getPost('start')));
			$end_event = date("Y-m-d H:i:s",strtotime($this->request->getPost('end')));
			$tes_event = date("H",strtotime($start_event));

			if($tes_event == "00") {
				$start_event = date("Y-m-d H:i:s",strtotime('-1 day', strtotime($this->request->getPost('start'))));
				$end_event = date("Y-m-d H:i:s",strtotime('-1 day', strtotime($this->request->getPost('end'))));
			}

			$date = date("Y-m-d H:i:s");

			$this->scheduleModel->insert([
				'title' => $title,
				'start_event' => $start_event,
				'end_event' => $end_event,
				'created_at' => $date,
				'updated_at' => $date
			]);
		}
    }

    public function update_schedule()
    {
        $id = $this->request->getPost('id');

		if($id !== "" AND $id !== NULL) {
			$start_event = date("Y-m-d H:i:s",strtotime($this->request->getPost('start')));
			$end_event = date("Y-m-d H:i:s",strtotime($this->request->getPost('end')));
			$tes_event = date("H",strtotime($start_event));

			if($tes_event == "00") {
				$start_event = date("Y-m-d H:i:s",strtotime('-1 day', strtotime($this->request->getPost('start'))));
				$end_event = date("Y-m-d H:i:s",strtotime('-1 day', strtotime($this->request->getPost('end'))));
			}

			$date = date("Y-m-d H:i:s");

			$this->scheduleModel->update($id, [
				'start_event' => $start_event,
				'end_event' => $end_event,
				'updated_at' => $date
			]);
		}
    }

    public function delete_schedule()
    {
        $id = $this->request->getPost('id');

		if($id !== "" AND $id !== NULL) {
			$this->scheduleModel->where('id',$id)->delete();
		}
    }

    public function regist_req()
    {
        $id = user()->id;

        $data = [
            'title' => 'Syarat Pendaftaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'reqs' => $this->registreqModel->asObject()->findAll(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/registration/requirements/index', $data);
    }

    public function add_regist_req()
    {
        $id = user()->id;

        $data = [
            'title' => 'Syarat Pendaftaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/registration/requirements/add', $data);
    }

    public function save_regist_req()
    {
        if(!$this->validate([
            'name' => [
                'rules' => 'required',
                'label' => 'Persyaratan'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Syarat Pendaftaran Gagal Disimpan!');
        }

        $this->registreqModel->insert([
            'name' => $this->request->getPost('name'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/regist_req')->with('success', 'Syarat Pendaftaran Berhasil Disimpan');
    }

    public function edit_regist_req($id_r)
    {
        $id = user()->id;

        $data = [
            'title' => 'Syarat Pendaftaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'req' => $this->registreqModel->where('id',$id_r)->asObject()->first(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/registration/requirements/edit', $data);
    }

    public function update_regist_req()
    {
        if(!$this->validate([
            'name' => [
                'rules' => 'required',
                'label' => 'Persyaratan'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Syarat Pendaftaran Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');

        $this->registreqModel->update($id, [
            'name' => $this->request->getPost('name'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/regist_req')->with('success', 'Syarat Pendaftaran Berhasil Disimpan');
    }

    public function regist_procedure()
    {
        $id = user()->id;

        $data = [
            'title' => 'Prosedur Pendaftaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'procedures' => $this->registprocModel->asObject()->findAll(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/registration/procedure/index', $data);
    }

    public function add_regist_procedure()
    {
        $id = user()->id;

        $data = [
            'title' => 'Prosedur Pendaftaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/registration/procedure/add', $data);
    }

    public function save_regist_procedure()
    {
        if(!$this->validate([
            'procedure' => [
                'rules' => 'required',
                'label' => 'Prosedur'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Prosedur Pendaftaran Gagal Disimpan!');
        }

        $this->registprocModel->insert([
            'procedure' => $this->request->getPost('procedure'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/regist_procedure')->with('success', 'Prosedur Pendaftaran Berhasil Disimpan');
    }

    public function edit_regist_procedure($id_p)
    {
        $id = user()->id;

        $data = [
            'title' => 'Prosedur Pendaftaran',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'procedure' => $this->registprocModel->where('id',$id_p)->asObject()->first(),
            'validation' => \Config\Services::validation(),
            'profile' => $this->userModel->where('id',$id)->first()
        ];

        return view('backend/registration/procedure/edit', $data);
    }

    public function update_regist_procedure()
    {
        if(!$this->validate([
            'procedure' => [
                'rules' => 'required',
                'label' => 'Prosedur'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Prosedur Pendaftaran Gagal Disimpan!');
        }

        $id = $this->request->getPost('id');

        $this->registprocModel->update($id, [
            'procedure' => $this->request->getPost('procedure'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('admin/dashboard/regist_procedure')->with('success', 'Prosedur Pendaftaran Berhasil Disimpan');
    }

    public function accounts()
    {
        $id = user()->id;

        $data = [
            'title' => 'Siswa Baru',
            'users' => $this->userModel->select('users.fullname, student_biodata.*, majors.name, student_file.certificate, student_file.skhu, student_file.family_card')->join('student_biodata','users.id=student_biodata.user_id')->join('student_major','users.id=student_major.user_id')->join('majors','student_major.major_id=majors.id')->join('student_file','users.id=student_file.user_id')->where('users.id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'profile' => $this->userModel->where('id',$id)->first(),
            'validation' => \Config\Services::validation()
        ];

        return view('backend/accounts/index', $data);
    }

    public function detail_accounts($slug, $user_id)
    {
        $id = user()->id;

        $data = [
            'title' => 'Siswa Baru',
            'user' => $this->userModel->select('users.fullname, users.image, users.username, users.email, users.phone, users.created_at, student_biodata.*, majors.name, student_major.reason as maj_reason, student_file.certificate, student_file.skhu, student_file.family_card')->join('student_biodata','users.id=student_biodata.user_id')->join('student_major','users.id=student_major.user_id')->join('majors','student_major.major_id=majors.id')->join('student_file','users.id=student_file.user_id')->where('users.id', $user_id)->first(),
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'profile' => $this->userModel->where('id',$id)->first(),
            'validation' => \Config\Services::validation()
        ];

        return view('backend/accounts/detail', $data);
    }

    public function print_student($user_id)
    {
        $data = [
            'title' => 'Cetak Formulir Pendaftaran',
            'user' => $this->userModel->select('users.fullname, users.image, users.username, users.email, users.phone, users.created_at, student_biodata.*, majors.name, student_major.reason as maj_reason, student_file.certificate, student_file.skhu, student_file.family_card')->join('student_biodata','users.id=student_biodata.user_id')->join('student_major','users.id=student_major.user_id')->join('majors','student_major.major_id=majors.id')->join('student_file','users.id=student_file.user_id')->where('users.id', $user_id)->first(),
            'contact' => $this->contactModel->asObject()->first(),
        ];

        return view('backend/accounts/print', $data);
    }

    public function account()
    {
        $id = user()->id;

        $data = [
            'title' => 'Akun',
            'users' => $this->userModel->where('id !=', $id)->findAll(),
            'majors' => $this->majorModel->findAll(),
            'profile' => $this->userModel->where('id',$id)->first(),
            'validation' => \Config\Services::validation()
        ];

        return view('backend/profile', $data);
    }

    public function basic_account()
    {
        $id = user()->id;

        $cek_user = $this->userModel->where(['id' => $id])->asObject()->first();

        if($cek_user->username == $this->request->getPost('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|alpha_numeric_punct|min_length[5]|is_unique[users.username]';
        }

        if($cek_user->fullname == $this->request->getPost('fullname')) {
            $rule_fullname = 'required';
        } else {
            $rule_fullname = 'required|min_length[5]';
        }

        if($cek_user->email == $this->request->getPost('email')) {
            $rule_email = 'required';
        } else {
            $rule_email = 'required|valid_email|is_unique[users.email]';
        }

        if($cek_user->phone == $this->request->getPost('phone')) {
            $rule_phone = 'required';
        } else {
            $rule_phone = 'required|is_unique[users.phone]';
        }

        if(!$this->validate([
            'username' => [
                'rules' => $rule_username,
                'label' => 'Username'
            ],
            'fullname' => [
                'rules' => $rule_fullname,
                'label' => 'Nama Lengkap'
            ],
            'email' => [
                'rules' => $rule_email,
                'label' => 'Alamat Email'
            ],
            'phone' => [
                'rules' => $rule_phone,
                'label' => 'Nomor HP'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Data Akun Gagal Disimpan!');
        }

        $this->userModel->update($id, [
            'username' => $this->request->getPost('username'),
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ]);

        return redirect()->to('admin/dashboard/account')->with('success', 'Data Akun Berhasil Disimpan');
    }

    public function image_account()
    {
        $id = user()->id;

        if(!$this->validate([
            'user_image' => [
                'rules' => 'max_size[user_image,512]|is_image[user_image]|mime_in[user_image,image/jpg,image/jpeg,image/png]',
                'label' => 'Foto Profil'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Foto Profil Gagal Disimpan!');
        }

        $image = $this->request->getFile('user_image');
        $image_name = $image->getName();

        if($image_name !== 'avatar-1.png') {
            $image->move('assets/img/admin');
        }

        $old_image = $this->request->getPost('image_old');

        if($old_image !== "avatar-1.png") {
            unlink('assets/img/admin/' . $old_image);
        }

        $this->userModel->update($id, [
            'image' => $image_name
        ]);
        
        return redirect()->to('admin/dashboard/account')->with('success', 'Foto Profil Berhasil Disimpan');
    }
}