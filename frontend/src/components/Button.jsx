import cn from "../lib/styling";

const variants = {
  default: "bg-white text-gray-800",
  primary: "bg-blue-500 text-white",
  success: "bg-green-500 text-white",
  danger: "bg-red-500 text-white",
  warning: "bg-yellow-500 text-gray-800",
  info: "bg-blue-300 text-gray-800",
};

const sizes = {
  small: "text-sm px-3 py-1.5",
  medium: "text-base px-4 py-2",
  large: "text-lg px-6 py-3",
};

function Button({
  children,
  type = "button",
  variant = "primary",
  size = "md",
  className = "",
  disabled = false,
  onClick,
  loading = false,
}) {
  return (
    <button
      type={type}
      disabled={disabled || loading}
      onClick={onClick}
      className={cn(
        "inline-flex items-center justify-center rounded-lg font-medium transition-all duration-200",
        variants[variant],
        sizes[size],
        disabled && "opacity-50 cursor-not-allowed",
        className
      )}
    >
      {loading && <span className="loader mr-2" />} {/* Optional loader */}
      {children}
    </button>
  );
}

export default Button;
