using System.ComponentModel.DataAnnotations;

namespace irbis.Models
{
    public class Contact
    {
        [Display(Name = "Фамилия")]
        [Required(ErrorMessage = "Введите фамилию")]
        public string Surname { get; set; }

        [Display(Name = "Имя")]
        [Required(ErrorMessage = "Введите имя")]
        public string Name { get; set; }

        [Display(Name = "Отчество")]
        public string Otchestvo { get; set; }
        
        [Display(Name = "пароль")]
        [Required(ErrorMessage = "придумайте пароль")]
        public string Pasword { get; set; }

        [Display(Name = "Возраст")]
        [Required(ErrorMessage = "Введите возраст")]
        public int Age { get; set; }

        [Display(Name = "Почта")]
        [Required(ErrorMessage = "Введите почту")]
        public string Email { get; set; }

        [Display(Name = "Город")]
        [Required(ErrorMessage = "Введите город")]
        public string City { get; set; }

    }
}
