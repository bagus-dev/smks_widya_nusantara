<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;
use App\Models\TeacherModel;
use App\Models\RegistreqModel;
use App\Models\ContactModel;
use App\Models\HeadmasterModel;
use App\Models\SchoolHistoryModel;
use App\Models\VisionMissionModel;
use App\Models\RegistProcedureModel;
use App\Models\AboutModel;
use App\Models\MajorModel;
use App\Models\ScheduleModel;
use App\Models\BiodataModel;
use App\Models\FileModel;
use App\Models\StumajModel;

class Frontend extends BaseController
{
    protected $userModel, $teacherModel, $contactModel, $registreqModel, $headmasterModel, $schoolhistoryModel, $visionModel, $registprocModel, $aboutModel, $majorModel,
    $scheduleModel, $bioModel, $fileModel, $stumajModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->teacherModel = new TeacherModel();
        $this->registreqModel = new RegistreqModel();
        $this->contactModel = new ContactModel();
        $this->headmasterModel = new HeadmasterModel();
        $this->schoolhistoryModel = new SchoolHistoryModel();
        $this->visionModel = new VisionMissionModel();
        $this->registprocModel = new RegistProcedureModel();
        $this->aboutModel = new AboutModel();
        $this->majorModel = new MajorModel();
        $this->scheduleModel = new ScheduleModel();
        $this->bioModel = new BiodataModel();
        $this->fileModel = new FileModel();
        $this->stumajModel = new StumajModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'sub_title' => '',
            'majors' => $this->majorModel->asObject()->findAll(),
            'teachers' => $this->teacherModel->where('front_status',1)->orderBy('front_seq','ASC')->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/index', $data);
    }

    public function headmaster_welcome()
    {
        $data = [
            'title' => 'Sambutan Kepala Sekolah',
            'sub_title' => 'Sambutan Kepala Sekolah',
            'majors' => $this->majorModel->asObject()->findAll(),
            'welcome' => $this->headmasterModel->asObject()->first(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/profile/welcome', $data);
    }

    public function school_history()
    {
        $data = [
            'title' => 'Sejarah Sekolah',
            'sub_title' => 'Sejarah Sekolah',
            'majors' => $this->majorModel->asObject()->findAll(),
            'history' => $this->schoolhistoryModel->asObject()->first(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/profile/history', $data);
    }

    public function vision_mission_objective()
    {
        $data = [
            'title' => 'Visi, Misi dan Tujuan',
            'sub_title' => 'Visi, Misi dan Tujuan',
            'majors' => $this->majorModel->asObject()->findAll(),
            'vm' => $this->visionModel->asObject()->first(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/profile/vm', $data);
    }

    public function teachers()
    {
        $data = [
            'title' => 'Daftar Guru',
            'sub_title' => 'Daftar Guru',
            'majors' => $this->majorModel->asObject()->findAll(),
            'teachers' => $this->teacherModel->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/profile/teacher', $data);
    }

    public function homeroom_teacher()
    {
        $data = [
            'title' => 'Wali Kelas',
            'sub_title' => 'Wali Kelas',
            'majors' => $this->majorModel->asObject()->findAll(),
            'teachers' => $this->teacherModel->where('homeroom_status',1)->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/profile/homeroom', $data);
    }

    public function major($slug)
    {
        $major = $this->majorModel->where('slug',$slug)->asObject()->first();

        $data = [
            'title' => 'Jurusan '.$major->name,
            'sub_title' => 'Jurusan '.$major->name,
            'majors' => $this->majorModel->asObject()->findAll(),
            'major' => $major,
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/major', $data);
    }

    public function schedule()
    {
        $data = [
            'title' => 'Jadwal Pendaftaran',
            'sub_title' => 'Jadwal Pendaftaran',
            'majors' => $this->majorModel->asObject()->findAll(),
            'start' => $this->scheduleModel->asObject()->first(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/registration/schedule', $data);
    }

    public function load_schedule()
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

        echo json_encode($data);
    }

    public function requirement()
    {
        $data = [
            'title' => 'Syarat Pendaftaran',
            'sub_title' => 'Syarat Pendaftaran',
            'majors' => $this->majorModel->asObject()->findAll(),
            'reqs' => $this->registreqModel->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/registration/requirement', $data);
    }

    public function procedure()
    {
        $data = [
            'title' => 'Prosedur Pendaftaran',
            'sub_title' => 'Prosedur Pendaftaran',
            'majors' => $this->majorModel->asObject()->findAll(),
            'procedures' => $this->registprocModel->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/registration/procedure', $data);
    }

    public function contact_us()
    {
        $data = [
            'title' => 'Kontak Kami',
            'sub_title' => 'Kontak Kami',
            'majors' => $this->majorModel->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/contact', $data);
    }

    public function regist_basic()
    {
        $id = user()->id;

        $data = [
            'title' => 'Pendaftaran Siswa Baru',
            'sub_title' => 'Informasi Utama',
            'step' => '1',
            'majors' => $this->majorModel->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first(),
            'validation' => \Config\Services::validation()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/registration/basic', $data);
    }

    public function save_basic()
    {
        $graduate_from = $this->request->getPost('graduate_from');
        $sttb_date = $this->request->getPost('sttb_date');
        $sttb_number = $this->request->getPost('sttb_number');
        $long_study = $this->request->getPost('long_study');

        if($sttb_date !== "" OR $sttb_number !== "" OR $long_study !== "") {
            $rules_graduate_from = "required";
        } elseif($sttb_date === "" AND $sttb_number === "" AND $long_study === "") {
            $rules_graduate_from = "permit_empty";
        }

        if($graduate_from !== "" OR $sttb_number !== "" OR $long_study !== "") {
            $rules_sttb_date = "required";
        } elseif($graduate_from === "" AND $sttb_number === "" AND $long_study === "") {
            $rules_sttb_date = "permit_empty";
        }

        if($graduate_from !== "" OR $sttb_date !== "" OR $long_study !== "") {
            $rules_sttb_number = "required";
        } elseif($graduate_from === "" AND $sttb_date === "" AND $long_study === "") {
            $rules_sttb_number = "permit_empty";
        }

        if($graduate_from !== "" OR $sttb_date !== "" OR $sttb_number !== "") {
            $rules_long_study = "required|numeric";
        } elseif($graduate_from === "" AND $sttb_date === "" AND $sttb_number === "") {
            $rules_long_study = "permit_empty";
        }

        $from_school = $this->request->getPost('from_school');
        $reason = $this->request->getPost('reason');

        if($reason !== "") {
            $rules_from_school = "required";
        } else {
            $rules_from_school = "permit_empty";
        }

        if($from_school !== "") {
            $rules_reason = "required";
        } else {
            $rules_reason = "permit_empty";
        }

        $live_with = $this->request->getPost('live_with');

        if($live_with === '2') {
            $rules_proxy_name = "required";
            $rules_proxy_place_birth = "required";
            $rules_proxy_date_birth = "required|valid_date[d/m/Y]";
            $rules_proxy_religion = "required|in_list[1,2,3,4,5,6]";
            $rules_proxy_citizenship = "required";
            $rules_proxy_education = "required";
            $rules_proxy_job = "required";
            $rules_proxy_income = "required|in_list[1,2,3,4,5]";
            $rules_proxy_address = "required";
            $rules_proxy_tel = "required|numeric";
            $rules_proxy_status = "required";
        } else {
            $rules_proxy_name = "permit_empty";
            $rules_proxy_place_birth = "permit_empty";
            $rules_proxy_date_birth = "permit_empty";
            $rules_proxy_religion = "permit_empty";
            $rules_proxy_citizenship = "permit_empty";
            $rules_proxy_education = "permit_empty";
            $rules_proxy_job = "permit_empty";
            $rules_proxy_income = "permit_empty";
            $rules_proxy_address = "permit_empty";
            $rules_proxy_tel = "permit_empty";
            $rules_proxy_status = "permit_empty";
        }

        $scholarship_year_1 = $this->request->getPost('scholarship_year_1');
        $scholarship_class_1 = $this->request->getPost('scholarship_class_1');
        $scholarship_from_1 = $this->request->getPost('scholarship_from_1');

        if($scholarship_class_1 !== "" OR $scholarship_from_1 !== "") {
            $rules_scholarship_year_1 = "required|valid_date[Y]";
        } elseif($scholarship_class_1 === "" AND $scholarship_from_1 === "") {
            $rules_scholarship_year_1 = "permit_empty";
        }

        if($scholarship_year_1 !== "" OR $scholarship_from_1 !== "") {
            $rules_scholarship_class_1 = "required|numeric|in_list[7,8,9]";
        } elseif($scholarship_year_1 === "" AND $scholarship_from_1 === "") {
            $rules_scholarship_class_1 = "permit_empty";
        }

        if($scholarship_year_1 !== "" OR $scholarship_class_1 !== "") {
            $rules_scholarship_from_1 = "required";
        } elseif($scholarship_year_1 === "" AND $scholarship_class_1 === "") {
            $rules_scholarship_from_1 = "permit_empty";
        }

        $scholarship_year_2 = $this->request->getPost('scholarship_year_2');
        $scholarship_class_2 = $this->request->getPost('scholarship_class_2');
        $scholarship_from_2 = $this->request->getPost('scholarship_from_2');

        if($scholarship_class_2 !== "" OR $scholarship_from_2 !== "") {
            $rules_scholarship_year_2 = "required|valid_date[Y]";
        } elseif($scholarship_class_2 === "" AND $scholarship_from_2 === "") {
            $rules_scholarship_year_2 = "permit_empty";
        }

        if($scholarship_year_2 !== "" OR $scholarship_from_2 !== "") {
            $rules_scholarship_class_2 = "required|numeric|in_list[7,8,9]";
        } elseif($scholarship_year_2 === "" AND $scholarship_from_2 === "") {
            $rules_scholarship_class_2 = "permit_empty";
        }

        if($scholarship_year_2 !== "" OR $scholarship_class_2 !== "") {
            $rules_scholarship_from_2 = "required";
        } elseif($scholarship_year_2 === "" AND $scholarship_class_2 === "") {
            $rules_scholarship_from_2 = "permit_empty";
        }

        $scholarship_year_3 = $this->request->getPost('scholarship_year_3');
        $scholarship_class_3 = $this->request->getPost('scholarship_class_3');
        $scholarship_from_3 = $this->request->getPost('scholarship_from_3');

        if($scholarship_class_3 !== "" OR $scholarship_from_3 !== "") {
            $rules_scholarship_year_3 = "required|valid_date[Y]";
        } elseif($scholarship_class_3 === "" AND $scholarship_from_3 === "") {
            $rules_scholarship_year_3 = "permit_empty";
        }

        if($scholarship_year_3 !== "" OR $scholarship_from_3 !== "") {
            $rules_scholarship_class_3 = "required|numeric|in_list[7,8,9]";
        } elseif($scholarship_year_3 === "" AND $scholarship_from_3 === "") {
            $rules_scholarship_class_3 = "permit_empty";
        }

        if($scholarship_year_3 !== "" OR $scholarship_class_3 !== "") {
            $rules_scholarship_from_3 = "required";
        } elseif($scholarship_year_3 === "" AND $scholarship_class_3 === "") {
            $rules_scholarship_from_3 = "permit_empty";
        }

        if(!$this->validate([
            'nickname' => [
                'rules' => 'required',
                'label' => 'Nama Panggilan'
            ],
            'gender' => [
                'rules' => 'required',
                'label' => 'Jenis Kelamin'
            ],
            'place_birth' => [
                'rules' => 'required',
                'label' => 'Tempat Lahir'
            ],
            'date_birth' => [
                'rules' => 'required|valid_date[d/m/Y]',
                'label' => 'Tanggal Lahir'
            ],
            'religion' => [
                'rules' => 'required|in_list[1,2,3,4,5,6]',
                'label' => 'Agama',
                'errors' => [
                    'in_list' => 'Agama harus dipilih!'
                ]
            ],
            'citizenship' => [
                'rules' => 'required',
                'label' => 'Kewarganegaraan'
            ],
            'order_family' => [
                'rules' => 'required|numeric',
                'label' => 'Anak Ke'
            ],
            'siblings' => [
                'rules' => 'required|numeric',
                'label' => 'Bersaudara'
            ],
            'stepbrosis' => [
                'rules' => 'required|numeric',
                'label' => 'Jumlah Saudara Tiri'
            ],
            'step_sibling' => [
                'rules' => 'required|numeric',
                'label' => 'Jumlah Saudara Angkat'
            ],
            'orphans' => [
                'rules' => 'required',
                'label' => 'Anak Yatim/Piatu/Yatim Piatu'
            ],
            'language' => [
                'rules' => 'required',
                'label' => 'Bahasa Sehari-hari'
            ],
            'address' => [
                'rules' => 'required',
                'label' => 'Alamat Lengkap'
            ],
            'tel' => [
                'rules' => 'required|numeric|is_unique[student_biodata.tel]',
                'label' => 'Nomor Telepon'
            ],
            'live_with' => [
                'rules' => 'required|in_list[1,2,3,4,5]',
                'label' => 'Tinggal Dengan',
                'errors' => [
                    'in_list' => 'Tinggal Dengan harus dipilih!'
                ]
            ],
            'distance' => [
                'rules' => 'required|numeric',
                'label' => 'Jarak dari Tempat Tinggal ke Sekolah'
            ],
            'blood_group' => [
                'rules' => 'required|in_list[1,2,3,4]',
                'label' => 'Golongan Darah',
                'errors' => [
                    'in_list' => 'Golongan Darah harus dipilih!'
                ]
            ],
            'disease' => [
                'rules' => 'required',
                'label' => 'Penyakit yang Pernah Diderita'
            ],
            'physical_disorder' => [
                'rules' => 'required',
                'label' => 'Kelainan Jasmani'
            ],
            'height' => [
                'rules' => 'required|numeric',
                'label' => 'Tinggi Badan'
            ],
            'weight' => [
                'rules' => 'required|numeric',
                'label' => 'Berat Badan'
            ],
            'graduate_from' => [
                'rules' => $rules_graduate_from,
                'label' => 'Lulusan Dari'
            ],
            'sttb_date' => [
                'rules' => $rules_sttb_date,
                'label' => 'Tanggal STTB'
            ],
            'sttb_number' => [
                'rules' => $rules_sttb_number,
                'label' => 'Nomor STTB'
            ],
            'long_study' => [
                'rules' => $rules_long_study,
                'label' => 'Lama Belajar'
            ],
            'from_school' => [
                'rules' => $rules_from_school,
                'label' => 'Dari Sekolah'
            ],
            'reason' => [
                'rules' => $rules_reason,
                'label' => 'Alasan Pindah'
            ],
            'father_name' => [
                'rules' => 'required',
                'label' => 'Nama Lengkap Ayah'
            ],
            'father_place_birth' => [
                'rules' => 'required',
                'label' => 'Tempat Lahir Ayah'
            ],
            'father_date_birth' => [
                'rules' => 'required|valid_date[d/m/Y]',
                'label' => 'Tanggal Lahir Ayah'
            ],
            'father_religion' => [
                'rules' => 'required|in_list[1,2,3,4,5,6]',
                'label' => 'Agama Ayah',
                'errors' => [
                    'in_list' => 'Agama Ayah harus dipilih!'
                ]
            ],
            'father_citizenship' => [
                'rules' => 'required',
                'label' => 'Kewarganegaraan Ayah'
            ],
            'father_education' => [
                'rules' => 'required',
                'label' => 'Pendidikan Terakhir Ayah'
            ],
            'father_job' => [
                'rules' => 'required',
                'label' => 'Pekerjaan Ayah'
            ],
            'father_income' => [
                'rules' => 'required|in_list[1,2,3,4,5]',
                'label' => 'Penghasilan per Bulan Ayah'
            ],
            'father_address' => [
                'rules' => 'required',
                'label' => 'Alamat Lengkap Ayah'
            ],
            'father_tel' => [
                'rules' => 'required|numeric',
                'label' => 'Nomor Telepon Ayah'
            ],
            'father_status' => [
                'rules' => 'required',
                'label' => 'Status Ayah'
            ],
            'mother_name' => [
                'rules' => 'required',
                'label' => 'Nama Lengkap Ibu'
            ],
            'mother_place_birth' => [
                'rules' => 'required',
                'label' => 'Tempat Lahir Ibu'
            ],
            'mother_date_birth' => [
                'rules' => 'required|valid_date[d/m/Y]',
                'label' => 'Tanggal Lahir Ibu'
            ],
            'mother_religion' => [
                'rules' => 'required|in_list[1,2,3,4,5,6]',
                'label' => 'Agama Ibu',
                'errors' => [
                    'in_list' => 'Agama Ibu harus dipilih!'
                ]
            ],
            'mother_citizenship' => [
                'rules' => 'required',
                'label' => 'Kewarganegaraan Ibu'
            ],
            'mother_education' => [
                'rules' => 'required',
                'label' => 'Pendidikan Terakhir Ibu'
            ],
            'mother_job' => [
                'rules' => 'required',
                'label' => 'Pekerjaan Ibu'
            ],
            'mother_income' => [
                'rules' => 'required|in_list[1,2,3,4,5]',
                'label' => 'Penghasilan per Bulan Ibu'
            ],
            'mother_address' => [
                'rules' => 'required',
                'label' => 'Alamat Lengkap Ibu'
            ],
            'mother_tel' => [
                'rules' => 'required|numeric',
                'label' => 'Nomor Telepon Ibu'
            ],
            'mother_status' => [
                'rules' => 'required',
                'label' => 'Status Ibu'
            ],
            'proxy_name' => [
                'rules' => $rules_proxy_name,
                'label' => 'Nama Lengkap Ibu'
            ],
            'proxy_place_birth' => [
                'rules' => $rules_proxy_place_birth,
                'label' => 'Tempat Lahir Ibu'
            ],
            'proxy_date_birth' => [
                'rules' => $rules_proxy_date_birth,
                'label' => 'Tanggal Lahir Ibu'
            ],
            'proxy_religion' => [
                'rules' => $rules_proxy_religion,
                'label' => 'Agama Ibu',
                'errors' => [
                    'in_list' => 'Agama Ibu harus dipilih!'
                ]
            ],
            'proxy_citizenship' => [
                'rules' => $rules_proxy_citizenship,
                'label' => 'Kewarganegaraan Ibu'
            ],
            'proxy_education' => [
                'rules' => $rules_proxy_education,
                'label' => 'Pendidikan Terakhir Ibu'
            ],
            'proxy_job' => [
                'rules' => $rules_proxy_job,
                'label' => 'Pekerjaan Ibu'
            ],
            'proxy_income' => [
                'rules' => $rules_proxy_income,
                'label' => 'Penghasilan per Bulan Ibu'
            ],
            'proxy_address' => [
                'rules' => $rules_proxy_address,
                'label' => 'Alamat Lengkap Ibu'
            ],
            'proxy_tel' => [
                'rules' => $rules_proxy_tel,
                'label' => 'Nomor Telepon Ibu'
            ],
            'proxy_status' => [
                'rules' => $rules_proxy_status,
                'label' => 'Status Ibu'
            ],
            'art_hobby' => [
                'rules' => 'permit_empty',
                'label' => 'Hobi Kesenian'
            ],
            'sport_hobby' => [
                'rules' => 'permit_empty',
                'label' => 'Hobi Olahraga'
            ],
            'org_hobby' => [
                'rules' => 'permit_empty',
                'label' => 'Hobi Kemasyarakatan/Organisasi'
            ],
            'other_hobby' => [
                'rules' => 'permit_empty',
                'label' => 'Hobi Lain-lain'
            ],
            'scholarship_year_1' => [
                'rules' => $rules_scholarship_year_1,
                'label' => 'Tahun Beasiswa'
            ],
            'scholarship_class_1' => [
                'rules' => $rules_scholarship_class_1,
                'label' => 'Kelas Beasiswa',
                'errors' => [
                    'in_list' => 'Kelas Beasiswa tidak valid!'
                ]
            ],
            'scholarship_from_1' => [
                'rules' => $rules_scholarship_from_1,
                'label' => 'Beasiswa Dari'
            ],
            'scholarship_year_2' => [
                'rules' => $rules_scholarship_year_2,
                'label' => 'Tahun Beasiswa'
            ],
            'scholarship_class_2' => [
                'rules' => $rules_scholarship_class_2,
                'label' => 'Kelas Beasiswa',
                'errors' => [
                    'in_list' => 'Kelas Beasiswa tidak valid!'
                ]
            ],
            'scholarship_from_2' => [
                'rules' => $rules_scholarship_from_2,
                'label' => 'Beasiswa Dari'
            ],
            'scholarship_year_3' => [
                'rules' => $rules_scholarship_year_3,
                'label' => 'Tahun Beasiswa'
            ],
            'scholarship_class_3' => [
                'rules' => $rules_scholarship_class_3,
                'label' => 'Kelas Beasiswa',
                'errors' => [
                    'in_list' => 'Kelas Beasiswa tidak valid!'
                ]
            ],
            'scholarship_from_3' => [
                'rules' => $rules_scholarship_from_3,
                'label' => 'Beasiswa Dari'
            ],
            'agree' => [
                'rules' => 'required',
                'label' => 'Persetujuan'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Informasi Utama Gagal Disimpan!');
        }

        $tgl_lahir = $this->request->getPost('date_birth');
        $tgl = substr($tgl_lahir,0,2);
        $bln = substr($tgl_lahir,3,2);
        $thn = substr($tgl_lahir,6);

        $sttb = $this->request->getPost('sttb_date');
        $sttb_date = substr($sttb,0,2);
        $sttb_mon = substr($sttb,3,2);
        $sttb_year = substr($sttb,6);

        $father = $this->request->getPost('father_date_birth');
        $father_date = substr($father,0,2);
        $father_mon = substr($father,3,2);
        $father_year = substr($father,6);

        $mother = $this->request->getPost('mother_date_birth');
        $mother_date = substr($mother,0,2);
        $mother_mon = substr($mother,3,2);
        $mother_year = substr($mother,6);

        if($live_with === '2') {
            $proxy = $this->request->getPost('proxy_date_birth');
            $proxy_date = substr($proxy,0,2);
            $proxy_mon = substr($proxy,3,2);
            $proxy_year = substr($proxy,6);

            $proxy_date_birth = $proxy_year."-".$proxy_mon."-".$proxy_date;
        } else {
            $proxy_date_birth = "";
        }

        $this->bioModel->insert([
            'user_id' => user()->id,
            'nickname' => $this->request->getPost('nickname'),
            'gender' => $this->request->getPost('gender'),
            'place_birth' => $this->request->getPost('place_birth'),
            'date_birth' => $thn."-".$bln."-".$tgl,
            'religion' => $this->request->getPost('religion'),
            'citizenship' => $this->request->getPost('citizenship'),
            'order_family' => $this->request->getPost('order_family'),
            'siblings' => $this->request->getPost('siblings'),
            'stepbrosis' => $this->request->getPost('stepbrosis'),
            'step_sibling' => $this->request->getPost('step_sibling'),
            'orphans' => $this->request->getPost('orphans'),
            'language' => $this->request->getPost('language'),
            'address' => $this->request->getPost('address'),
            'tel' => $this->request->getPost('tel'),
            'live_with' => $this->request->getPost('live_with'),
            'distance' => $this->request->getPost('distance'),
            'blood_group' => $this->request->getPost('blood_group'),
            'disease' => $this->request->getPost('disease'),
            'physical_disorder' => $this->request->getPost('physical_disorder'),
            'height' => $this->request->getPost('height'),
            'weight' => $this->request->getPost('weight'),
            'graduate_from' => $this->request->getPost('graduate_from'),
            'sttb_date' => $sttb_year."-".$sttb_mon."-".$sttb_date,
            'sttb_number' => $this->request->getPost('sttb_number'),
            'long_study' => $this->request->getPost('long_study'),
            'from_school' => $this->request->getPost('from_school'),
            'reason' => $this->request->getPost('reason'),
            'father_name' => $this->request->getPost('father_name'),
            'father_place_birth' => $this->request->getPost('father_place_birth'),
            'father_date_birth' => $father_year."-".$father_mon."-".$father_date,
            'father_religion' => $this->request->getPost('father_religion'),
            'father_citizenship' => $this->request->getPost('father_citizenship'),
            'father_education' => $this->request->getPost('father_education'),
            'father_job' => $this->request->getPost('father_job'),
            'father_income' => $this->request->getPost('father_income'),
            'father_address' => $this->request->getPost('father_address'),
            'father_tel' => $this->request->getPost('father_tel'),
            'father_status' => $this->request->getPost('father_status'),
            'mother_name' => $this->request->getPost('mother_name'),
            'mother_place_birth' => $this->request->getPost('mother_place_birth'),
            'mother_date_birth' => $mother_year."-".$mother_mon."-".$mother_date,
            'mother_religion' => $this->request->getPost('mother_religion'),
            'mother_citizenship' => $this->request->getPost('mother_citizenship'),
            'mother_education' => $this->request->getPost('mother_education'),
            'mother_job' => $this->request->getPost('mother_job'),
            'mother_income' => $this->request->getPost('mother_income'),
            'mother_address' => $this->request->getPost('mother_address'),
            'mother_tel' => $this->request->getPost('mother_tel'),
            'mother_status' => $this->request->getPost('mother_status'),
            'proxy_name' => $this->request->getPost('proxy_name'),
            'proxy_place_birth' => $this->request->getPost('proxy_place_birth'),
            'proxy_date_birth' => $proxy_date_birth,
            'proxy_religion' => $this->request->getPost('proxy_religion'),
            'proxy_citizenship' => $this->request->getPost('proxy_citizenship'),
            'proxy_education' => $this->request->getPost('proxy_education'),
            'proxy_job' => $this->request->getPost('proxy_job'),
            'proxy_income' => $this->request->getPost('proxy_income'),
            'proxy_address' => $this->request->getPost('proxy_address'),
            'proxy_tel' => $this->request->getPost('proxy_tel'),
            'proxy_status' => $this->request->getPost('proxy_status'),
            'art_hobby' => $this->request->getPost('art_hobby'),
            'sport_hobby' => $this->request->getPost('sport_hobby'),
            'org_hobby' => $this->request->getPost('org_hobby'),
            'other_hobby' => $this->request->getPost('other_hobby'),
            'scholarship_year_1' => $this->request->getPost('scholarship_year_1'),
            'scholarship_class_1' => $this->request->getPost('scholarship_class_1'),
            'scholarship_from_1' => $this->request->getPost('scholarship_from_1'),
            'scholarship_year_2' => $this->request->getPost('scholarship_year_2'),
            'scholarship_class_2' => $this->request->getPost('scholarship_class_2'),
            'scholarship_from_2' => $this->request->getPost('scholarship_from_2'),
            'scholarship_year_3' => $this->request->getPost('scholarship_year_3'),
            'scholarship_class_3' => $this->request->getPost('scholarship_class_3'),
            'scholarship_from_3' => $this->request->getPost('scholarship_from_3'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('registration/major')->with('success', 'Informasi Utama Berhasil Disimpan');
    }

    public function regist_major()
    {
        $id = user()->id;

        $data = [
            'title' => 'Pendaftaran Siswa Baru',
            'sub_title' => 'Jurusan',
            'step' => '2',
            'majors' => $this->majorModel->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first(),
            'validation' => \Config\Services::validation()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/registration/major', $data);
    }

    public function save_major()
    {
        if(!$this->validate([
            'major_id' => [
                'rules' => 'required',
                'label' => 'Jurusan'
            ],
            'reason' => [
                'rules' => 'required',
                'label' => 'Alasan Memilih Jurusan'
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', 'Jurusan Gagal Disimpan!');
        }

        $this->stumajModel->insert([
            'user_id' => user()->id,
            'major_id' => $this->request->getPost('major_id'),
            'reason' => $this->request->getPost('reason'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('registration/file')->with('success', 'Jurusan Berhasil Disimpan');
    }

    public function regist_file()
    {
        $id = user()->id;

        $data = [
            'title' => 'Pendaftaran Siswa Baru',
            'sub_title' => 'Unggah Berkas',
            'step' => '3',
            'majors' => $this->majorModel->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first(),
            'validation' => \Config\Services::validation()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->first();
                $data['major'] = $this->stumajModel->where('user_id',$id)->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/registration/file', $data);
    }

    public function save_certificate()
    {
        if(!$this->validate([
            'certificate' => [
                'rules' => 'max_size[certificate,512]|mime_in[certificate,application/pdf]|ext_in[certificate,pdf]',
                'label' => 'Ijazah'
            ]
        ])) {
            $response['status'] = 0;
            $response['errors'] = $this->validator->errors;
        } else {
            $id = user()->id;
            $certificate = $this->request->getFile('certificate');
            $name = $certificate->getName();

            $cek = $this->fileModel->where('user_id',$id);

            if(count($cek->findAll()) === 1) {
                $row = $this->fileModel->where('user_id',$id)->asObject()->first();

                if($row->certificate !== "") {
                    unlink('assets/files/certificate/'.$row->certificate);
                }

                $certificate->move('assets/files/certificate');

                if($this->fileModel->where('user_id',$id)->set([
                    'certificate' => $name,
                    'updated_at' => date('Y-m-d H:i:s')
                ])->update()) {
                    $response['status'] = 1;
                    $response['name'] = $name;
                    $users = $this->userModel->where('id',$id)->first();

                    if($row->skhu !== "" AND $row->family_card !== "" AND $users->image !== "avatar-1.png") {
                        $response['files'] = 1;
                        $response['slug'] = url_title($users->fullname, '-', true);
                    } else {
                        $response['files'] = 0;
                    }
                } else {
                    $response['status'] = 2;
                }
            } else {
                $certificate->move('assets/files/certificate');

                if($this->fileModel->insert([
                    'user_id' => $id,
                    'certificate' => $name,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ])) {
                    $response['status'] = 1;
                    $response['files'] = 0;
                } else {
                    $response['status'] = 2;
                }
            }
        }

        echo json_encode($response);
    }

    public function save_skhu()
    {
        if(!$this->validate([
            'skhu' => [
                'rules' => 'max_size[skhu,512]|mime_in[skhu,application/pdf]|ext_in[skhu,pdf]',
                'label' => 'Surat Keterangan Hasil Ujan (SKHU)'
            ]
        ])) {
            $response['status'] = 0;
            $response['errors'] = $this->validator->errors;
        } else {
            $id = user()->id;
            $skhu = $this->request->getFile('skhu');
            $name = $skhu->getName();

            $cek = $this->fileModel->where('user_id',$id);

            if(count($cek->findAll()) === 1) {
                $row = $this->fileModel->where('user_id',$id)->asObject()->first();

                if($row->skhu !== "") {
                    unlink('assets/files/skhu/'.$row->skhu);
                }

                $skhu->move('assets/files/skhu');

                if($this->fileModel->where('user_id',$id)->set([
                    'skhu' => $name,
                    'updated_at' => date('Y-m-d H:i:s')
                ])->update()) {
                    $response['status'] = 1;
                    $response['name'] = $name;
                    $users = $this->userModel->where('id',$id)->first();

                    if($row->certificate !== "" AND $row->family_card !== "" AND $users->image !== "avatar-1.png") {
                        $response['files'] = 1;
                        $response['slug'] = url_title($users->fullname, '-', true);
                    } else {
                        $response['files'] = 0;
                    }
                } else {
                    $response['status'] = 2;
                }
            } else {
                $skhu->move('assets/files/skhu');

                if($this->fileModel->insert([
                    'user_id' => $id,
                    'skhu' => $name,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ])) {
                    $response['status'] = 1;
                    $response['files'] = 0;
                } else {
                    $response['status'] = 2;
                }
            }
        }

        echo json_encode($response);
    }

    public function save_family_card()
    {
        if(!$this->validate([
            'family_card' => [
                'rules' => 'max_size[family_card,512]|mime_in[family_card,application/pdf]|ext_in[family_card,pdf]',
                'label' => 'Kartu Keluarga (KK)'
            ]
        ])) {
            $response['status'] = 0;
            $response['errors'] = $this->validator->errors;
        } else {
            $id = user()->id;
            $family_card = $this->request->getFile('family_card');
            $name = $family_card->getName();

            $cek = $this->fileModel->where('user_id',$id);

            if(count($cek->findAll()) === 1) {
                $row = $this->fileModel->where('user_id',$id)->asObject()->first();

                if($row->family_card !== "") {
                    unlink('assets/files/family_card/'.$row->family_card);
                }

                $family_card->move('assets/files/family_card');

                if($this->fileModel->where('user_id',$id)->set([
                    'family_card' => $name,
                    'updated_at' => date('Y-m-d H:i:s')
                ])->update()) {
                    $response['status'] = 1;
                    $response['name'] = $name;
                    $users = $this->userModel->where('id',$id)->first();

                    if($row->certificate !== "" AND $row->skhu !== "" AND $users->image !== "avatar-1.png") {
                        $response['files'] = 1;
                        $response['slug'] = url_title($users->fullname, '-', true);
                    } else {
                        $response['files'] = 0;
                    }
                } else {
                    $response['status'] = 2;
                }
            } else {
                $family_card->move('assets/files/family_card');

                if($this->fileModel->insert([
                    'user_id' => $id,
                    'family_card' => $name,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ])) {
                    $response['status'] = 1;
                    $response['files'] = 0;
                } else {
                    $response['status'] = 2;
                }
            }
        }

        echo json_encode($response);
    }

    public function save_image() {
        if(!$this->validate([
            'image' => [
                'rules' => 'max_size[image,512]|max_dims[image,472,709]|mime_in[image,image/jpeg,image/jpg,image/png]|ext_in[image,jpg,jpeg,png]',
                'label' => 'Pas Foto'
            ]
        ])) {
            $response['status'] = 0;
            $response['errors'] = $this->validator->errors;
        } else {
            $id = user()->id;
            $image = $this->request->getFile('image');
            $name = $image->getName();

            $cek = $this->userModel->where('id',$id)->first();

            if($cek->image !== "avatar-1.png") {
                unlink('assets/img/users/'.$cek->image);
            }

            $image->move('assets/img/users');

            if($this->userModel->update($id, [
                'image' => $name
            ])) {
                $response['status'] = 1;
                $response['name'] = $name;
                $file = $this->fileModel->where('user_id',$id)->asObject()->first();
                
                if($file->certificate !== "" AND $file->skhu !== "" AND $file->family_card !== "") {
                    $response['files'] = 1;
                    $response['slug'] = url_title($cek->fullname, '-', true);
                } else {
                    $response['files'] = 0;
                }
            } else {
                $response['status'] = 2;
            }
        }

        echo json_encode($response);
    }

    public function profile() {
        $id = user()->id;

        $data = [
            'title' => 'Profil',
            'sub_title' => 'Profil',
            'majors' => $this->majorModel->asObject()->findAll(),
            'about' => $this->aboutModel->asObject()->first(),
            'contact' => $this->contactModel->asObject()->first(),
            'validation' => \Config\Services::validation()
        ];

        if(logged_in()) {
            $id = user()->id;

            if(in_groups('user')) {
                $data['biodata'] = $this->bioModel->where('user_id',$id)->asObject()->first();
                $data['major'] = $this->stumajModel->select('student_major.*, majors.name')->join('majors','student_major.major_id=majors.id')->where('user_id',$id)->asObject()->first();
                $data['file'] = $this->fileModel->where('user_id',$id)->asObject()->first();
                $data['profile'] = $this->userModel->where('id',$id)->first();
            }
        }

        return view('frontend/profile', $data);
    }
}
