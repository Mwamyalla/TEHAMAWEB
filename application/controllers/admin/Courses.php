<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Courses extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$user = $this->session->userdata('user');

		if (empty($user)) {
			$this->session->set_flashdata('msg', 'Your session has been expired !');
			redirect(base_url() . 'account/login');
		}
	}

	public function Index()
	{
		$this->load->model('Course_model');
		$rows = $this->Course_model->getCourses();
		$data['rows'] = $rows;
		$this->load->view('admin/courses/courses', $data);
	}


	public function showCreateForm()
	{
		$html = $this->load->view('admin/courses/create', '', true);
		$response['html'] = $html;

		$this->load->model('Category_model');
		$category = $this->Category_model->getCategories();

		$this->load->model('SubCategory_model');
		$subcategory = $this->SubCategory_model->getSubCategories();

		$this->load->model('Language_model');
		$language = $this->Language_model->getLanguages();

		$categories = '<option>choose</option>';
		foreach ($category as $cat) {
			$categories .= '<option value="' . $cat['catid'] . '">' . $cat['category'] . '</option>';
		}
		$response['categories'] = $categories;

		$subcategories = '<option>choose</option>';
		foreach ($subcategory as $subcat) {
			$subcategories .= '<option value="' . $subcat['subcatid'] . '">' . $subcat['subcategory'] . '</option>';
		}
		$response['subcategories'] = $subcategories;

		$languages = '<option>choose</option>';
		foreach ($language as $lang) {
			$languages .= '<option value="' . $lang['lang_id'] . '">' . $lang['language'] . '</option>';
		}
		$response['languages'] = $languages;

		echo json_encode($response);
	}

	public function saveCourse()
	{


		$this->load->model("Course_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Course Name', 'trim|required');
		$this->form_validation->set_rules('level', 'level ', 'trim|required');
		$this->form_validation->set_rules('catid', 'Category ', 'trim|required');
		$this->form_validation->set_rules('subcatid', 'Subcategory ', 'trim|required');
		$this->form_validation->set_rules('lang_id', 'Language ', 'trim|required');

		if ($this->form_validation->run() == true) {

			$user = $this->session->userdata('user');

			$formArray = array();
			$formArray['courseid']           = md5(time());
			$formArray['instructor_id']      = $user['userid'];
			$formArray['title']              = $this->input->post('title');
			$formArray['slug']               = slug($this->input->post('title'));
			$formArray['catid']              = $this->input->post('catid');
			$formArray['subcatid']           = $this->input->post('subcatid');
			$formArray['level']              = $this->input->post('level');
			$formArray['lang_id']            = $this->input->post('lang_id');
			$formArray['created_at']         = date('Y-m-d H:i:s');

			$catid = $this->Course_model->create($formArray);

			$row = $this->Course_model->getRow($catid);
			$newData['row'] = $row;
			$rowHtml = $this->load->view('admin/courses/courses_row', $newData, true);

			$response['row'] = $rowHtml;
			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';
		} else {

			$response['status'] = 0;
			$response['title'] = strip_tags(form_error('title'));
			$response['level'] = strip_tags(form_error('level'));
			$response['catid'] = strip_tags(form_error('catid'));
			$response['subcatid'] = strip_tags(form_error('subcatid'));
			$response['lang_id'] = strip_tags(form_error('lang_id'));
		}

		echo json_encode($response);
	}


	public function showSectionForm($courseid)
	{
		$html = $this->load->view('admin/courses/section_form', '', true);
		$response['html'] = $html;
		echo json_encode($response);
	}

	public function showSectionEditForm($section_id)
	{
		$this->load->model('Section_model');
		$sections = $this->Section_model->getRow($section_id);

		$response['sections'] = '<input type="text" class="form-control" placeholder="title" name="title" value="' . $sections['title'] . '">';


		$html = $this->load->view('admin/courses/section_edit_form', '', true);
		$response['html'] = $html;
		echo json_encode($response);
	}

	public function showattachmentForm($section_id)
	{	
		$this->load->model('Lesson_model');
		$lesson = $this->Lesson_model->getBySection($section_id);
		
		$lessons = '<option>choose</option>';
		foreach ($lesson as $less) {
			$lessons .= '<option value="' . $less['lesson_id'] . '">' . $less['title'] . '</option>';
		}
		$response['lessons'] = $lessons;

		$html = $this->load->view('admin/courses/attachment_add', '', true);
		$response['html'] = $html;
		echo json_encode($response);
	}

	public function saveSection($courseid)
	{


		$this->load->model("Section_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'trim|required');

		if ($this->form_validation->run() == true) {

			$formArray = array();
			$formArray['section_id']      = md5(time());
			$formArray['title']           = $this->input->post('title');
			$formArray['courseid']        = $this->uri->segment(4);
			$formArray['order']           = 0;

			$this->Section_model->create($formArray);

			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';
		} else {
			$response['status'] = 0;
			$response['title'] = strip_tags(form_error('title'));
		}

		echo json_encode($response);
	}



	public function editSection($section_id)
	{


		$this->load->model("Section_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'trim|required');

		if ($this->form_validation->run() == true) {

			$formArray = array();
			$formArray['title']           = $this->input->post('title');
			$formArray['order']           = 0;

			$this->Section_model->update($section_id, $formArray);

			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';
		} else {
			$response['status'] = 0;
			$response['title'] = strip_tags(form_error('title'));
		}

		echo json_encode($response);
	}


	public function showlessonForm($courseid)
	{
		$courseid = $this->uri->segment(4);

		$this->load->model('Section_model');
		$sectionss = $this->Section_model->getSection($courseid);

		$sections = '<option>choose</option>';
		foreach ($sectionss as $sect) {
			$sections .= '<option value="' . $sect['section_id'] . '">' . $sect['title'] . '</option>';
		}
		$response['sections'] = $sections;


		$html = $this->load->view('admin/courses/lesson_form', '', true);
		$response['html'] = $html;
		echo json_encode($response);
	}


	public function saveLesson($courseid)
	{


		$this->load->model("Lesson_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'trim|required');
		$this->form_validation->set_rules('section_id', 'section_id', 'trim|required');
		$this->form_validation->set_rules('lesson_type', 'lesson_type', 'trim|required');
		// print_r($_POST);die;
		$folder = "./assets/uploads/courses/lessons/";

		if (!file_exists($folder)) {
			mkdir($folder, 0777, true);
			file_put_contents("./assets/uploads/courses/index.php", 'Access Denied');
			file_put_contents("./assets/uploads/index.php", 'Access Denied');
		}
		if (!empty($_FILES['video']['name'])) {
			$destination = $folder . time() . $_FILES['video']['name'];
			move_uploaded_file($_FILES['video']['tmp_name'], $destination);

			$formArray = array();
			$formArray['lesson_id']           = md5(time());
			$formArray['courseid']        = $this->uri->segment(4);
			$formArray['video_file']           = $destination;
			$formArray['title']          = $this->input->post('title');
			$formArray['section_id']     = $this->input->post('section_id');
			$formArray['duration']       = $this->input->post('duration');
			$formArray['video_type']     = $this->input->post('lesson_provider');
			$formArray['video_url']     = $this->input->post('video_url');
			$formArray['lesson_type']    = $this->input->post('lesson_type');
			$formArray['attachment_type'] = $this->input->post('attachment_type');
			$formArray['articles']       = $this->input->post('articles');
			$formArray['created_at']     = date('Y-m-d H:i:s');
			$lesson_id = $this->Lesson_model->create($formArray);

			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';

		} else {


			$formArray = array();
			$formArray['lesson_id']      = md5(time());
			$formArray['courseid']       = $this->uri->segment(4);
			$formArray['title']          = $this->input->post('title');
			$formArray['section_id']     = $this->input->post('section_id');
			$formArray['duration']       = $this->input->post('duration');
			$formArray['video_type']     = $this->input->post('lesson_provider');
			$formArray['video_url']      = $this->input->post('video_url');
			$formArray['lesson_type']    = $this->input->post('lesson_type');
			$formArray['attachment']     = $this->input->post('attachment');
			$formArray['attachment_type'] = $this->input->post('attachment_type');
			$formArray['articles']       = $this->input->post('articles');
			$formArray['created_at']     = date('Y-m-d H:i:s');

			$lesson_id = $this->Lesson_model->create($formArray);

			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record  SuccessFully!</h4></div>';
		}



		echo json_encode($response);
	}

    public function addLessonAttachment()
	{


		$this->load->model("Lesson_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'trim|required');

		$folder_attachments = "./assets/uploads/courses/attachements/";
		if (!file_exists($folder_attachments)) {
			mkdir($folder_attachments, 0777, true);
			file_put_contents("./assets/uploads/courses/index.php", 'Access Denied');
			file_put_contents("./assets/uploads/index.php", 'Access Denied');
		}

		if (!empty($_FILES['attachment']['name'])) {
			$attachments = $folder_attachments . time() . $_FILES['attachment']['name'];
			move_uploaded_file($_FILES['attachment']['tmp_name'], $attachments);


			$formArray = array();

			$lesson_id                     = $this->input->post('lesson_id');
			$formArray['attachment']       = $attachments;
			$formArray['attachment_type']  = $this->input->post('attachment_type');
			$formArray['updated_at']       = date('Y-m-d H:i:s');
			$this->Lesson_model->update($lesson_id, $formArray);


			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';
		}
		echo json_encode($response);
	}

    public function saveMedia($courseid)
	{

		$this->load->model("Course_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'trim|required');

		$folder = "./assets/uploads/courses/promo_video/";
		if (!file_exists($folder)) {
			mkdir($folder, 0777, true);
			file_put_contents("./assets/uploads/courses/index.php", 'Access Denied');
			file_put_contents("./assets/uploads/index.php", 'Access Denied');
		}

		$folder_thumbnails = "./assets/uploads/courses/thumbnails/";
		if (!file_exists($folder_thumbnails)) {
			mkdir($folder_thumbnails, 0777, true);
			file_put_contents("./assets/uploads/courses/index.php", 'Access Denied');
			file_put_contents("./assets/uploads/index.php", 'Access Denied');
		}

		if (!empty($_FILES['image']['name'])) {
			$thumbnails = $folder_thumbnails . time() . $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], $thumbnails);

			if (!empty($_FILES['promo_video']['name'])) {
				$promo_video = $folder . time() . $_FILES['promo_video']['name'];
				move_uploaded_file($_FILES['promo_video']['tmp_name'], $promo_video);
			}

			$formArray = array();

			$formArray['image']             = $thumbnails;
			$formArray['promo_video']       = $promo_video;
			$formArray['promo_link']        = $this->input->post('promo_link');
			$formArray['updated_at']        = date('Y-m-d H:i:s');
			$this->Course_model->update($courseid, $formArray);

			$this->session->set_flashdata('success', 'course updated Successfully!');
		    redirect(base_url('admin/courses/edit/') . $courseid);

	
		}

		$this->load->view('admin/courses/edit/');
	}


	public function edit($courseid, $section_id = "")
	{
		$this->load->model('Course_model');
		$rows = $this->Course_model->getCourse($courseid);
		$data['rows'] = $rows;

		$this->load->model('Category_model');
		$categories = $this->Category_model->getCategories();
		$data['categories'] = $categories;

		$this->load->model('SubCategory_model');
		$subcategories = $this->SubCategory_model->getSubCategories();
		$data['subcategories'] = $subcategories;

		$this->load->model('Language_model');
		$languages = $this->Language_model->getLanguages();
		$data['languages'] = $languages;

		$this->load->model('Section_model');
		$sections = $this->Section_model->getSection($courseid);
		$data['sections'] = $sections;

		$courseid =  $this->uri->segment(4);

		$this->load->model('Lesson_model');
		$lessons = $this->Lesson_model->getLessons($courseid);
		$data['lessons'] = $lessons;

		$this->load->model('Currency_model');
		$currencies = $this->Currency_model->getCurrencies();
		$data['currencies'] = $currencies;


		$this->load->view('admin/courses/edit', $data);
	}

	public function saveSeo($courseid)
	{

		$this->load->model("Course_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('meta_keywords', 'meta_keywords', 'trim|required');
		$this->form_validation->set_rules('meta_description', 'meta_description', 'trim|required');

		if ($this->form_validation->run() == true) {
			$formArray = array();


			$formArray = array();
			$formArray['meta_keywords']          = $this->input->post('meta_keywords');
			$formArray['meta_description']          = $this->input->post('meta_description');
	
			$formArray['updated_at']      = date('Y-m-d H:i:s');

			$id = $this->Course_model->update($courseid, $formArray);


			$this->session->set_flashdata('success', 'course updated Successfully!');
		    redirect(base_url('admin/courses/edit/') . $courseid);
		} else {
			 redirect(base_url('admin/courses/edit/') . $courseid);
			

		}

		$this->load->view('admin/courses/edit');

	}
	
	public function SavebasicInfo($courseid)
	{

		$this->load->model("Course_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'title', 'trim|required');

		if ($this->form_validation->run() == true) {
			$formArray = array();


			$formArray = array();
			$formArray['title']          = $this->input->post('title');
			$formArray['catid']          = $this->input->post('catid');
			$formArray['subcatid']       = $this->input->post('subcatid');
			$formArray['short_description']       = $this->input->post('short_description');
			$formArray['description']     = $this->input->post('description');
			$formArray['level']           = $this->input->post('level');
			$formArray['lang_id']         = $this->input->post('lang_id');
			$formArray['updated_at']      = date('Y-m-d H:i:s');

			$id = $this->Course_model->update($courseid, $formArray);


			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';
		} else {
			$response['status'] = 0;
			$response['title'] = strip_tags(form_error('title'));
		}

		echo json_encode($response);
	}

	public function requrementAdd($courseid)
	{

		$this->load->model("Course_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('requirements', 'requirements', 'min_length[235]');

		$requirementsData = array();

		foreach ($this->input->post('requirements') as $key => $value) {
			array_push($requirementsData, $value);
		}
		$requirementsData = array_filter($requirementsData);
		$requirementsData = array_values($requirementsData);

		if ($this->form_validation->run() == true) {
			$formArray = array();

			$formArray['courseid']        = $this->uri->segment(4);
			$formArray['requirements']    = json_encode($requirementsData);

			$id = $this->Course_model->update($courseid, $formArray);

			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';
		} else {
			$response['status'] = 0;
			$response['requirements'] = strip_tags(form_error('requirements'));
		}

		echo json_encode($response);
	}

	public function outcomesAdd($courseid)
	{

		$this->load->model("Course_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('outcomes', 'outcomes', 'min_length[235]');

		$outcomesData = array();

		foreach ($this->input->post('outcomes') as $key => $value) {
			array_push($outcomesData, $value);
		}
		$outcomesData = array_filter($outcomesData);
		$outcomesData = array_values($outcomesData);

		if ($this->form_validation->run() == true) {
			$formArray = array();

			$formArray['courseid']        = $this->uri->segment(4);
			$formArray['outcomes']    = json_encode($outcomesData);

			$id = $this->Course_model->update($courseid, $formArray);

			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';
		} else {
			$response['status'] = 0;
			$response['outcomes'] = strip_tags(form_error('outcomes'));
		}

		echo json_encode($response);
	}

	public function savePrice($courseid)
	{

		$this->load->model("Course_model");
		$this->load->helper("common_helper");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('currency_id', 'Currency', 'trim|required');
		// $this->form_validation->set_rules('price', 'Price', 'trim|required');
		$this->form_validation->set_rules('discounted_price', 'Discounted price', 'trim|required');


		if ($this->form_validation->run() == true) {
			$formArray = array();

			//percentage calc
			$actualPrice = $this->input->post('price');
			$discounted_price = $this->input->post('discounted_price');
			$reducedPrice = $actualPrice - $discounted_price;
			$discountedPercentage = ($reducedPrice / $actualPrice) * 100;
			// print_r($discountedPercentage);die;

			$formArray['currency_id']            = $this->input->post('currency_id');
			$formArray['price']                  = $this->input->post('price');
			$formArray['discounted_price']       = $this->input->post('discounted_price');
			$formArray['discount_percent']       = $discountedPercentage;
			$formArray['updated_at']      = date('Y-m-d H:i:s');


			$id = $this->Course_model->update($courseid, $formArray);

			$response['status'] = 1;
			$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';
		} else {
			$response['status'] = 0;
			$response['currency_id'] = strip_tags(form_error('currency_id'));
			$response['price'] = strip_tags(form_error('price'));
			$response['discounted_price'] = strip_tags(form_error('discounted_price'));
			$response['discount_percent'] = strip_tags(form_error('discount_percent'));
		}

		echo json_encode($response);
	}

	public function enable($courseid)
	{
		$data = array('published' => 1);
		$this->load->model('Course_model');
		$courses = $this->Course_model->getRow($courseid);

		if (empty($courses)) {
			$this->session->set_flashdata('error', 'courses is not found');
			redirect(base_url() . 'admin/courses');
		}


		$this->Course_model->update($courseid, $data);
		$this->session->set_flashdata('success', 'courses updated Successfully!');
		redirect(base_url() . 'admin/courses');

		$this->load->view('admin/courses/courses');
	}
	public function disable($courseid)
	{
		$data = array('published' => 0);
		$this->load->model('Course_model');
		$courses = $this->Course_model->getRow($courseid);

		if (empty($courses)) {
			$this->session->set_flashdata('error', 'courses is not found');
			redirect(base_url() . 'admin/courses');
		}


		$this->Course_model->update($courseid, $data);
		$this->session->set_flashdata('success', 'courses updated Successfully!');
		redirect(base_url() . 'admin/courses');

		$this->load->view('admin/courses/courses');
	}


	public function deleteCourse($courseid)
	{
		$this->load->model('Course_model');
		$courses = $this->Course_model->getRow($courseid);

		if (empty($courses)) {
			$this->session->set_flashdata('error', 'courses is not found');
			redirect(base_url() . 'admin/courses');
		}


		$this->Course_model->delete($courseid);
		$this->session->set_flashdata('success', 'courses deleted Successfully!');
		redirect(base_url() . 'admin/courses');

		$this->load->view('admin/courses/courses');
	}

	public function deleteSection($courseid, $section_id)
	{
		$this->load->model('Section_model');

		$courseid = $this->uri->segment(4);
		$section_id = $this->uri->segment(5);

		$sections = $this->Section_model->getRow($section_id);

		if (empty($sections)) {
			$this->session->set_flashdata('error', 'Section is not found');
			redirect(base_url() . 'admin/courses/edit');
		}


		$this->Section_model->delete($section_id);
		$this->session->set_flashdata('success', 'Section deleted Successfully!');
		redirect(base_url('admin/courses/edit/') . $courseid);

		$this->load->view('admin/courses/edit/');
	}

	public function deleteLesson($courseid, $lesson_id)
	{
		$this->load->model('Lesson_model');


		$courseid = $this->uri->segment(4);
		$lesson_id = $this->uri->segment(5);


		$lessons = $this->Lesson_model->getRow($lesson_id);

		if (empty($lessons)) {
			$this->session->set_flashdata('error', 'Lesson is not found');
			redirect(base_url('admin/courses/edit/') . $courseid);
		}

		$this->Lesson_model->delete($lesson_id);
		$this->session->set_flashdata('success', 'Lesson deleted Successfully!');
		redirect(base_url('admin/courses/edit/') . $courseid);

		$this->load->view('admin/courses/courses');
	}
}
