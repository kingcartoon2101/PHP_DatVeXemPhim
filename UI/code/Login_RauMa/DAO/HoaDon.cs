//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated from a template.
//
//     Manual changes to this file may cause unexpected behavior in your application.
//     Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace DAO
{
    using System;
    using System.Collections.Generic;
    
    public partial class HoaDon
    {
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2214:DoNotCallOverridableMethodsInConstructors")]
        public HoaDon()
        {
            this.CTHoaDons = new HashSet<CTHoaDon>();
        }
    
        public string IDHoaDon { get; set; }
        public string IDNV { get; set; }
        public Nullable<System.DateTime> NgayLapHoaDon { get; set; }
        public Nullable<short> TrangThai { get; set; }
        public Nullable<decimal> Tongtien { get; set; }
        public Nullable<int> Tongso { get; set; }
    
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<CTHoaDon> CTHoaDons { get; set; }
        public virtual NhanVien NhanVien { get; set; }
    }
}
